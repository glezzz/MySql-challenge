<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'View/includes/header.php'
?>

    <p><a href="index.php">Back to homepage</a></p>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Index</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Profile Link</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($students as $student) :?>
            <tr>
                <th scope="row"><?php echo $student->getId()?></th>
                <td><?php echo $student->getFirstName()?></td>
                <td><?php echo $student->getLastName()?></td>
                <td><?php echo $student->getEmail()?></td>
                <td><a href="index.php?user=<?php echo $student->getId()?>"><?php echo $student->getFirstName()."'s "?>profile</a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
<?php include 'View/includes/footer.php'?>