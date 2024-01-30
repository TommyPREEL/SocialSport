<?php
require_once("./bdd/class/Database.php");
require_once("./front/features/event/event.repository.php");
$database = Database::getInstance();
$eventRepository = new EventRepository($database);

$action = $_REQUEST["action"] ?? "";

switch ($action) {
  case "showEventsListPage":
  {
    try {
      $events = $eventRepository->getAll();
    } catch (Exception $e) {
      echo $e->getMessage();
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
      break;
    } catch (Exception $e) {
      echo $e->getMessage();
      break;
    }
  }

  case "editForm":
  {
    try {
      $id_events = $_REQUEST["id"];
      $event = $eventRepository->getById($id_events);
      include("./front/views/v_event_edit.php");
      break;
    } catch (Exception $e) {
      echo $e->getMessage();
      break;
    }
  }

  case "edit":
  {
    $event = [
      "id_events" => $_REQUEST["id"],
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
      $eventRepository->update($event);
      break;
    } catch (Exception $e) {
      echo $e->getMessage();
      break;
    }
  }

  case "delete":
  {
    $id = $_REQUEST["id"];
    try {
      $eventRepository->delete($id);
      header("Location: ".$_SERVER['PHP_SELF']);
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