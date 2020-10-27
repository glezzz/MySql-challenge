<?php


class HomepageController
{
    public function display()
    {
        require_once "View/homepage.php";
        if (!empty($_POST['firstname']) && !empty($_POST['lastname'] && !empty($_POST['email']))) {
            $fname= $_POST['firstname'];
            $lname = $_POST['lastname'];
            $email =$_POST['email'];
            $students = new Student_Insert($firstname, $lastname, $email);
            return $students;

        }
    }

}