<?php

class UserRepository
{
  public function __construct(private Database $database)
  {
  }

  public function create($firstname, $lastname, $username, $password, $phone, $birthdayDate, $country, $postalCode, $gender, $job): bool
  {
    $sql = "INSERT INTO users (firstname, lastname, username, password, phone, birthday_date, country, postal_code, gender, job) VALUES (:firstname, :lastname, :username, :password, :phone, :birthdayDate, :country, :postalCode, :gender, :job)";
    $statement = $this->database->PDO->prepare($sql);
    $statement->bindParam(':firstname', $firstname);
    $statement->bindParam(':lastname', $lastname);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', $password);
    $statement->bindParam(':phone', $phone);
    $statement->bindParam(':birthdayDate', $birthdayDate);
    $statement->bindParam(':country', $country);
    $statement->bindParam(':postalCode', $postalCode);
    $statement->bindParam(':gender', $gender);
    $statement->bindParam(':job', $job);
    return $statement->execute();
  }

  public function findOne($username, $password)
  {
    $sql = "SELECT firstname, lastname, username, phone, birthday_date, country, postal_code, gender, job, role FROM users WHERE username='$username' AND password='$password'";
    $statement = $this->database->PDO->query($sql);
    return $statement->fetch(PDO::FETCH_ASSOC);
  }
}
