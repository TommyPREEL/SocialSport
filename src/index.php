<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SocialSport</title>
  <?php
  require_once("./bdd/class/Database.php");
  include("./front/views/v_header.php");
  include("./front/views/v_main.php");
  session_start();
  ?>
</head>
<body>
<?php
$bdd = new Database();
if (!isset($_REQUEST["controller"]))
  $controller = "main";
else
  $controller = $_REQUEST["controller"];

switch ($controller) {
  case "main":
  {
    include("./front/controllers/c_main.php");
    break;
  }
  case "users":
  {
    include("./front/controllers/c_users.php");
    break;
  }
  case "events":
  {
    include("./front/controllers/c_events.php");
    break;
  }
}
?>
</body>
</html>