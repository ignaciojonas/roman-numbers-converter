<?php
require_once __DIR__ .'/config/appConfig.php';
require_once __DIR__ .'/controllers/RomanNumbersController.php';
include 'lib/vendor/autoload.php';

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
