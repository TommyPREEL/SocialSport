<?php
class Database {
    private $host = "database";
    private $dbname = "SocialSport";
    private $username = "root";
    private $password = "root";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Échec de la connexion : " . $e->getMessage());
        }
    }

    public function getUsers() {
        $sql = "SELECT id, nom, email FROM utilisateurs";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($firstname, $lastname, $username, $password, $phone, $birthdayDate, $country, $postalCode, $gender, $job, $role) {
        $sql = "INSERT INTO users (firstname, lastname, username, password, phone, birthday_date, country, postal_code, gender, job, role) VALUES (:firstname, :lastname, :username, :password, :phone, :birthdayDate, :country, :postalCode, :gender, :job, :role)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':email', $email);
        return $stmt->execute();
    }

    public function closeConnection() {
        $this->conn = null;
    }
}

// Exemple d'utilisation de la classe Database
$database = new Database();

// // Exemple de récupération d'utilisateurs
// $users = $database->getUsers();
// foreach ($users as $user) {
//     echo "ID: {$user['id']}, Nom: {$user['nom']}, Email: {$user['email']}<br>";
// }

// // Exemple d'ajout d'utilisateur
// $database->addUser('John Doe', 'john@example.com');

// Fermer la connexion (cela peut ne pas être nécessaire si vous utilisez PDO persistent connections)
$database->closeConnection();
?>
