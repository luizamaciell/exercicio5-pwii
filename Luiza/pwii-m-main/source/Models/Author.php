<?php
require __DIR__."/User.php";
class Author extends User
{
    private $document;
    private $address;
    private $school;

public function __construct($name = null, $email = null, $password = null, $document = null, $address = null, $school = null){
    parent::__construct($name, $email, $password);
    $this->document = $document;
    $this->address = $address;
    $this-> school = $school; 
} 
    public function getDocument()
    {
        return $this->Document;
    }

    public function setDocument($document)
    {
        $this->document = $document;
    }
    public function getAddress()
    {
        return $this->Address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getSchool()
    {
        return $this->School;
    }

    public function setSchool($school)
    {
        $this->school = $school;
    } 
}