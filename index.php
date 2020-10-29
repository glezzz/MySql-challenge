<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'Model/Connection.php';
require 'Model/Student.php';
require 'Model/StudentLoader.php';

require 'Controller/RegisterController.php';
require 'Controller/DisplayController.php';
require 'Controller/LoginController.php';


if(isset($_GET['page']) && $_GET['page'] === 'overview') {
    $display = new DisplayController();
    $display->display();

} elseif (isset($_GET['user'])) {
    $profile = new DisplayController();
    $profile->displayProfile($_GET['user']);

} elseif (isset($_GET['page']) && $_GET['page'] === 'login') {
    $logIn = new LoginController();
    $logIn->logIn();

} else {
    $controller = new RegisterController();
    $controller->render();
}