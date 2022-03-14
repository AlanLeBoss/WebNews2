<?php
class user
{
    private $id;
    private $firstname;
    private $lastname;
    private $email;

    public function __construct(int $id, string $fname, string $lname, string $mail)
    {
        $this->id = $id;
        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->email = $mail;
    }
    function getId()
    {
        return $this->id;
    }
    function getFirstname()
    {
        return $this->firstname;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getEmail()
    {
        return $this->email;
    }
}