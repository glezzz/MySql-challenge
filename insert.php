<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//require 'Connection.php';

function validateFields(){

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];       // save the value even when invalid
    if (empty($email)) {
        $emailErr = " * Email is required";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = " * Not a valid email address";

        }
    }
}


?>

<!doctype html>
<html>
<head></head>
<body>
<form method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname">
    <label for="email">Email</label>
    <input type="text" name="email">
</form>
</body>
</html>
