<?php
namespace Source\Models;
class User {
    private $name;
    private $email;
    private $password;
    private $document;
    private $dateOfBirth;
    private $address;


public function __construct( $name = null, $email = null, $password = null, $document = null, $dateOfBirth = null, Address $address = null )
{
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    $this->document = $document;
    $this->dateOfBirth = $dateOfBirth;
    $this->address = $address;
}
public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getDocument()
    {
        return $this->document;
    }

    public function setDocument($document)
    {
        $this->document = $document;
    }
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this-> address = $address;
    }
    

}