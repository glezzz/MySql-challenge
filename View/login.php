<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'includes/header.php'; ?>

<form action="" method="post">
    <input type="email" placeholder="Enter Email" name="email" required <?php echo isset($error) ? $error : "" ?>/>
    <input type="password" placeholder="Enter Password" name="password"
           required <?php echo isset($error) ? $error : "" ?>/>
    <input type="submit" value="Log In">
</form>
<p><a href="index.php">Back to Homepage</a></p>
<?php include 'includes/footer.php' ?>
