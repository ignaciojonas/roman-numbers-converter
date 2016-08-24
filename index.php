<?php

/**
 * Index File Doc Comment
 *
 * PHP version 7.1
 *
 * @category Index
 * @package  Main
 * @author   Ignacio Jonas <ignaciojonas@gmail.com>
 * @license  GNU General Public License version 2 or later; see LICENSE
 * @link     https://github.com/ignaciojonas/roman-numbers-converter/
 */

require 'lib/vendor/autoload.php';
$controller = new RomanNumbersController();

switch (isset($_GET[AppConfig::$ACTION]) ? $_GET[AppConfig::$ACTION] : null) {
case AppConfig::$ACTION_CONVERT:
    $controller->convertNumber();
    break;
default:
    $controller->showPage();
    break;
}
