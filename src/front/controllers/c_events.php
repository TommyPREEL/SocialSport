<?php
$action = $_REQUEST["action"] ?? "";
require_once("./front/features/Event/event.repository.php");
$eventRepository = new EventRepository($bdd);

switch ($action) {
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
    $event = [
      "date" => [
        "start" => $_POST["start_date"],
        "end" => $_POST["end_date"]
      ],
      "location" => [
        "start" => $_POST["start_location"],
        "end" => $_POST["end_location"]
      ],
      "requirements" => [
        "skill" => $_POST["skill_requirements"] ?? "aucune",
        "material" => $_POST["material_requirements"] ?? "aucune"
      ],
      "conditions" => [
        "legal" => $_POST["legal_conditions"] ?? "aucune",
        "meteorological" => $_POST["meteorological_conditions"] ?? "aucune"
      ],
      "limitRegistrationDate" => $_POST["limit_registration_date"],
    ];

    try {
      $eventRepository->create($event);
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