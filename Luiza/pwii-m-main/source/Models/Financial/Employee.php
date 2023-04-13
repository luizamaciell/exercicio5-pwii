<?php
namespace Source\Models\Financial;

use Source\Models\User;

class Employee extends User {
    private $office;
    private $department;
    private $registration;

    public function __construct($name = null, $email = null, $password = null,$document = null, $dateOfBirth = null, $address = null, $office = null, $department = null, $registration = null){
        parent::__construct($name, $email, $password,$document, $dateOfBirth, $address);
        $this->office = $office;
        $this->department = $department;
        $this->registration = $registration;
    }
}