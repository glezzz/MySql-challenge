<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'View/includes/header.php'
?>

<form action="" method="post">
    <label for="firstname">First Name</label>
    <input type="text" name="firstname">
    <label for="lastname">Last Name</label>
    <input type="text" name="lastname">
    <label for="email">Email</label>
    <input type="text" name="email">
    <button type="submit">Submit</button>
    <p><a href="index.php?page=login">Login </a></p>

</form>
<?php include 'View/includes/footer.php' ?>
