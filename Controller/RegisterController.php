<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class RegisterController
{
    public function render()
    {
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm-password'])) {
            //$loader = new StudentLoader();
            $student = new Student($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['password']);
            $student->save();
        }
        require 'View/register.php';
    }

    public function validateFields()
    {
        global $firstName, $lastName, $email, $password, $confirmPassword;
        global $firstNameErr, $lastNameErr, $emailErr, ;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $firstName = $_POST['firstname'];
            if (empty($firstName)) {
                $firstNameErr = "* First name is required";

            } else {
                $firstName = $this->test_input($firstName);
            }

            $lastName = $_POST['lastname'];
            if (empty($lastName)) {
                $lastNameErr = "* Last name is required";

            } else {
                $lastName = $this->test_input($lastName);
            }

            $email = $_POST['email'];
            if (empty($email)) {
                $emailErr = " * Email is required";

            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = " * Not a valid email address";
                }
            }

            $password = $_POST['password'];
            if (empty($password)) {
                $cityErr = "* Password is required";

            } else {
                $password = $this->test_input($password);
            }

            $confirmPassword = $_POST['confirm-password'];
            if (empty($confirmPassword)) {
                $cityErr = "* Password is required";

            } else {
                $confirmPassword = $this->test_input($confirmPassword);
            }
        }
    }

    public function test_input($data)
    {

        $data = trim($data);                //check and remove unnecessary characters
        //$data = stripslashes($data);
        //$data = htmlspecialchars($data);
        return $data;
    }

}