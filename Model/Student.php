<?php

class Student extends Connection
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;

    /**
     * Student constructor.
     * @param int $id
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $password
     */
    public function __construct(/*int $id, */string $firstName, string $lastName, string $email, string $password)
    {
        /*$this->id = $id;*/
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
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

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    //save student to DB
    public function saveStudent(PDO $data)
    {
        $handle = $data->prepare('INSERT INTO student (first_name, last_name, email, password) VALUES (:firstname, :lastname, :email, :password)');
        $handle->bindValue('firstname', ucfirst($this->getFirstName()));
        $handle->bindValue('lastname', ucfirst($this->getLastName()));
        $handle->bindValue('email', $this->getEmail());
        $handle->bindValue('password', $this->getPassword());
        $handle->execute();
    }

    public function save()
    {
        $this->saveStudent($this->openConnection());
    }
}