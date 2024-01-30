<?php
  $action = $_REQUEST["action"] ?? "";
  switch($action) {
    case "showEventsListPage":
    {
      try {
        $bdd->getEventsList();
        break;
      } catch (Exception $e) {
        echo $e->getMessage();
        break;
      }
      include("./front/views/v_events_list.php");
      break;
    }
    case "showEventDetailsPage":
    {
      include("./front/views/v_event_details.php");
      break;
    }
    case "showEventCreatePage":
    {
      include("./front/views/v_event_create.php");
      break;
    }
    case "createEvent":
    {
      try {
        $bdd->createEvent(
          $_POST["start_date"],
          $_POST["start_location"],
          $_POST["end_date"],
          $_POST["end_location"],
          $_POST["skill_requirements"],
          $_POST["material_requirements"],
          $_POST["meteorological_conditions"],
          $_POST["legal_conditions"],
          $_POST["limit_registration_date"],
          $_POST["event_score"],
          $_POST["member_score"]
        );
        echo "OUAIS CEST OK MON REUF";
        break;
      } catch (Exception $e) {
        echo $e->getMessage();
        break;
      }
      break;
    }

//   case "register":
//   {
//     try {
//       $bdd->createUser(
//         $_POST["firstName"],
//         $_POST["lastName"],
//         $_POST["username"],
//         $_POST["password"],
//         $_POST["phone"],
//         $_POST["birthdayDate"],
//         $_POST["country"],
//         $_POST["postalCode"],
//         $_POST["gender"],
//         $_POST["job"]
//       );
//       echo("walidé");
//       break;
//     } catch (Exception $e) {
//       echo $e->getMessage();
//       break;
//     }
//   }
//   case "login":
//     {
//       try {
//         $user = $bdd->findUser(
//           $_POST["username"],
//           $_POST["password"]
//         );
//         $_SESSION["user"] = $user;
//         break;
//       } catch (Exception $e) {
//         echo $e->getMessage();
//         break;
//       }
//     }

    default:
      throw new Exception('Unexpected value');
  }
?>