<?php

class RegisterController
{
    public function render()
    {
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])) {
            $loader = new StudentLoader();
            $student = new Student($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);
            $student->save();
        }
        require 'View/register.php';
    }
}