<?php
    $action = $_REQUEST["action"] ?? "";
    switch($action)
    {
        case "showLoginPage":
        {
            include("./views/v_login.php");
            break;
        }
        case "showRegisterPage":
        {
            include("./views/v_register.php");
            break;
        }
        case "register":
        {
            try
            {
                $bdd->createUser(
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
                )
                echo("walidé");
            }
            catch(Exception $e)
                echo $e->getMessage();

            break;
        }

    }
?>