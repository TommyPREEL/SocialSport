<?php

class Database
{
  private string $host = "database";
  private string $dbname = "SocialSport";
  private string $username = "root";
  private string $password = "root";
  private PDO $conn;

  public function __construct()
  {
    try {
      $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Échec de la connexion : " . $e->getMessage());
    }
  }

  public function getUsers()
  {
    $sql = "SELECT id, nom, email FROM utilisateurs";
    $stmt = $this->conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createUser($firstname, $lastname, $username, $password, $phone, $birthdayDate, $country, $postalCode, $gender, $job)
  {
    $sql = "INSERT INTO users (firstname, lastname, username, password, phone, birthday_date, country, postal_code, gender, job) VALUES (:firstname, :lastname, :username, :password, :phone, :birthdayDate, :country, :postalCode, :gender, :job)";
    $stmt = $this->conn->prepare($sql);
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

  public function closeConnection()
  {
    $this->conn = null;
  }
}

?>
