<?php
    $action = $_REQUEST["action"] ?? "main";
    switch($action)
    {
        case "showLoginPage":
        {
            include("./front/views/v_login.php");
            break;
        }
        case "main":
        {
            include("./front/views/v_main.php");
            break;
        }
    }
?>