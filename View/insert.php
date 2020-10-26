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
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="street">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" class="form-control" value="">

            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="">

                </div>
                <button type="submit">Submit</button>
</form>
</body>
</html>
