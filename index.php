<?php
include 'lib/vendor/autoload.php';
include 'config/appConfig.php';
include 'controllers/RomanNumbersController.php';
$controller = new RomanNumbersController();

switch (isset($_GET[AppConfig::$ACTION]) ? $_GET[AppConfig::$ACTION] : null) {
  case AppConfig::$ACTION_CONVERT:
      $controller->convertNumber();
      break;
  default:
      $controller->showPage();
      break;
}

?>
