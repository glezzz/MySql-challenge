<?php


class StudentInsert extends Connection
{
    public function __construct($firstname, $lastname, $email)
    {
        $sql = $this->Connection()->prepare("INSERT INTO student (firstname, lastname, email)
VALUES (:firstname, :lastname, :email)");
        $sql->bindValue(':firstname', $firstname);
        $sql->bindValue(':lastname', $lastname);
        $sql->bindValue(':email', $email);
        $sql->execute();

    }


}