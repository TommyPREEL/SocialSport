<?php

class Database
{
  private static ?Database $databaseInstance;
  public PDO $PDO;
  private string $host = "localhost";
  private string $dbname = "SocialSport";
  private string $username = "root";
  private string $password = "";

  private function __construct()
  {
    try {
      $this->PDO = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
      $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die("Échec de la connexion : " . $e->getMessage());
    }
  }

  public static function getInstance(): Database
  {
    if (!isset(self::$databaseInstance)) {
      self::$databaseInstance = new static();
    }

    return self::$databaseInstance;
  }

  /**
   * Singletons should not be restored from strings.
   */
  public function __wakeup()
  {
    throw new Exception("Cannot unserialize a singleton.");
  }

  /**
   * Singletons should not be cloneable.
   */
  protected function __clone()
  {
  }
}

