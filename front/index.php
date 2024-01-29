<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SocialSport</title>
        <?php
            session_start();
            require_once("../bdd/class/Database.php");
            include("./views/v_header.php");
            include("./views/v_main.php");
        ?>
    </head>
    <body>
        <?php
            $bdd = new Database();
            if(!isset($_REQUEST["controller"]))
                $controller = "main";
            else
                $controller = $_REQUEST["controller"];

            switch($controller)
            {
                case "main":
                    {
                        include("./controllers/c_main.php");
                        break;
                    }
                case "users":
                    {
                        include("./controllers/c_users.php");
                        break;
                    }
                case "events":
                    {
                        include("./controllers/c_events.php");
                        break;
                    }
            }
        ?>
    </body>
</html>