<?php


class HomepageController
{
    public function render()
    {
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];

            $students = new Student($firstname, $lastname, $email);
            return $students;
        }
    }

}