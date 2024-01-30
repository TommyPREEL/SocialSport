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
}

