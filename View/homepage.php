<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <title>MySQL Challenge</title>
</head>
<body>
<form method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname">
    <label for="email">Email</label>
    <input type="text" name="email">
    <button type="submit">Submit</button>
</form>
</body>
</html>
