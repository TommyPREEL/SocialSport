<?php
require_once("./bdd/class/Database.php");
require_once("./front/features/user/user.repository.php");
$database = Database::getInstance();
$userRepository = new UserRepository($database);

$action = $_REQUEST["action"] ?? "";
switch ($action) {
  case "showLoginPage":
  {
    include("./front/views/v_login.php");
    break;
  }
  case "showRegisterPage":
  {
    include("./front/views/v_register.php");
    break;
  }
  case "register":
  {
    try {
      $userRepository->create(
        $_POST["firstName"],
        $_POST["lastName"],
        $_POST["username"],
        $_POST["password"],
        $_POST["phone"],
        $_POST["birthdayDate"],
        $_POST["country"],
        $_POST["postalCode"],
        $_POST["gender"],
        $_POST["job"]
      );
      echo("walidé");
      break;
    } catch (Exception $e) {
      echo $e->getMessage();
      break;
    }
  }
  case "login":
  {
    try {
      $user = $userRepository->findOne(
        $_POST["username"],
        $_POST["password"]
      );
      $_SESSION["user"] = $user;
      break;
    } catch (Exception $e) {
      echo $e->getMessage();
      break;
    }
  }

  default:
    throw new Exception('Unexpected value');

}
?>