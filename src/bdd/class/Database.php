<?php

class Database
{
  public PDO $PDO;
  private string $host = "database";
  private string $dbname = "SocialSport";
  private string $username = "root";
  private string $password = "root";

  public function __construct()
  {
    try {
      $this->PDO = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
      $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Échec de la connexion : " . $e->getMessage());
    }
  }

  public function getUsers()
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->PDO->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createUser($firstname, $lastname, $username, $password, $phone, $birthdayDate, $country, $postalCode, $gender, $job)
  {
    $sql = "INSERT INTO users (firstname, lastname, username, password, phone, birthday_date, country, postal_code, gender, job) VALUES (:firstname, :lastname, :username, :password, :phone, :birthdayDate, :country, :postalCode, :gender, :job)";
    $stmt = $this->PDO->prepare($sql);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':birthdayDate', $birthdayDate);
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':postalCode', $postalCode);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':job', $job);
    return $stmt->execute();
  }

  public function findUser($username, $password)
  {
    $sql = "SELECT firstname, lastname, username, phone, birthday_date, country, postal_code, gender, job, role FROM users WHERE username='$username' AND password='$password'";
    $stmt = $this->conn->prepare($sql);
    $stmt = $this->conn->query($sql);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function createEvent($start_date, $start_location, $end_date, $end_location, $skill_requirements, $material_requirements, $meteorological_conditions, $legal_conditions, $limit_registration_date, $event_score, $member_score)
  {
    $sql = "INSERT INTO events (start_date, start_location, end_date, end_location, skill_requirements, material_requirements, meteorological_conditions, legal_conditions, limit_registration_date, event_score, member_score) VALUES (:start_date, :start_location, :end_date, :end_location, :skill_requirements, :material_requirements, :meteorological_conditions, :legal_conditions, :limit_registration_date, :event_score, :member_score)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':start_date', $start_date);
    $stmt->bindParam(':start_location', $start_location);
    $stmt->bindParam(':end_date', $end_date);
    $stmt->bindParam(':end_location', $end_location);
    $stmt->bindParam(':skill_requirements', $skill_requirements);
    $stmt->bindParam(':material_requirements', $material_requirements);
    $stmt->bindParam(':meteorological_conditions', $meteorological_conditions);
    $stmt->bindParam(':legal_conditions', $legal_conditions);
    $stmt->bindParam(':limit_registration_date', $limit_registration_date);
    $stmt->bindParam(':event_score', $event_score);
    $stmt->bindParam(':member_score', $member_score);
    return $stmt->execute();
  }

  public function closeConnection()
  {
    $this->PDO = null;
  }
}

?>
