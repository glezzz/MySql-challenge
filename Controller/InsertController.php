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

    public function logIn() {
        if (!empty($_POST['email'])) {
            $loader = new StudentLoader();
            $students = $loader->getStudents();
            $counter = 0;
            $error = "";
            foreach ($students as $student) {
                $counter++;
                if ($_POST['email'] == $student->getEmail() && password_verify($_POST['password'], $student->getPassword() )) {
                    header("location: http://localhost/crud-mysql/index.php?page=info");
                    break;
                } elseif ($loader->countStudent() == $counter) {
                    $error = "style='border: red solid 2px'";
                }
            }
        }
        require 'View/login.php';
    }


}