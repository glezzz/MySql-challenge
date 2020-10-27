<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/Connection.php';
require 'Model/Student.php';
require 'Model/StudentLoader.php';
require 'Controller/HomepageController.php';
require 'View/homepage.php';

$controller = new HomepageController();
$controller->render();