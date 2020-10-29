<?php


class OverviewController
{
    public function displayOverview()
    {
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();

        require 'View/overview.php';
    }

    public function displayProfile($id) {

        $studentLoader = new StudentLoader();
        $student = $studentLoader->displayStudent($id);

        require 'View/profile.php';
    }

}