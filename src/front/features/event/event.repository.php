<?php

class EventRepository
{
  public function __construct(private Database $database)
  {
  }

  public function getAll()
  {
    $sql = "SELECT * FROM events";
    $statement = $this->database->PDO->query($sql);
    return $statement->fetchAll();
  }

  public function create($event): bool
  {
    $sql = "
      INSERT INTO events (start_date, start_location, end_date, end_location, skill_requirements, material_requirements, meteorological_conditions, legal_conditions, limit_registration_date)
      VALUES (:start_date, :start_location, :end_date, :end_location, :skill_requirements, :material_requirements, :meteorological_conditions, :legal_conditions, :limit_registration_date)
      ";

    $statement = $this->database->PDO->prepare($sql);
    $statement->bindParam(":start_date", $event["date"]["start"]);
    $statement->bindParam(":start_location", $event["location"]["start"]);
    $statement->bindParam(":end_date", $event["date"]["end"]);
    $statement->bindParam(":end_location", $event["location"]["end"]);

    // Requirements
    $statement->bindParam(":skill_requirements", $event["requirements"]["skill"]);
    $statement->bindParam(":material_requirements", $event["requirements"]["material"]);

    $statement->bindParam(":meteorological_conditions", $event["conditions"]["meteorological"]);
    $statement->bindParam(":legal_conditions", $event["conditions"]["legal"]);

    $statement->bindParam(":limit_registration_date", $event["limitRegistrationDate"]);

    return $statement->execute();
  }
}
