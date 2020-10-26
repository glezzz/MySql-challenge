<?php


class StudentLoader extends Connection
{
    private array $students = [];


    public function __construct()
    {
        $handle = $this->Connection()->prepare("SELECT * FROM student");
        $handle->execute();
        foreach ($handle->fetchAll() as $student) {
            $this->students[$student["id"]] = new Student($student['firstname'], $student['lastname'], $student['email']);
        }
    }

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

}