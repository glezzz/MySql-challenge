<?php

class InsertController
{
    public function render()
    {
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
            $loader = new StudentLoader();
            $student = new Student($loader->countStudent(), $_POST['firstname'], $_POST['lastname'], $_POST['email']);
            $student->save();
        }
        require 'View/insert.php';
    }


}