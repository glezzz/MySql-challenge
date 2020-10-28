<?php

class Student extends Connection
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    /**
     * Student constructor.
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     */
    public function __construct(int $id, string $firstName, string $lastName, string $email)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    //create students
    public function saveStudent(PDO $data)
    {
        $handle = $data->prepare('INSERT INTO student (first_name, last_name, email) VALUES (:firstname, :lastname, :email)');
        $handle->bindValue('firstname', ucfirst($this->getFirstName()));
        $handle->bindValue('lastname', ucfirst($this->getLastName()));
        $handle->bindValue('email', $this->getEmail());
        $handle->execute();
    }

    public function save()
    {
        $this->saveStudent($this->openConnection());
    }
}