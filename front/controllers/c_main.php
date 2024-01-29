<?php
    $action = $_REQUEST["action"] ?? "";
    switch($action)
    {
        case "showLoginPage":
        {
            include("./views/v_login.php");
            break;
        }
    }
?>