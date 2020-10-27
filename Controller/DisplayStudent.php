<?php


class DisplayStudent
{
    public function display()
    {
        $studentLoader = new StudentLoader();
        $students = $studentLoader->getStudents();
        
    }

}