<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>SocialSport</title>
  <?php
  session_start();
  include("./front/views/v_header.php");
  ?>
</head>
<body>
<?php
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