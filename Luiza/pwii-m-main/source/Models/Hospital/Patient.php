<?php
namespace Source\Models\Hospital;

use  Source\Models\User;

class Patient extends User{
    private $information;
    private $dateOfBirth;
    public function __construct($name = null, $email = null, $password = null, $information = null, $dateOfBirth = null){
        parent::__construct($name, $email, $password);
        $this->information = $information;
        $this->dateOfBirth = $dateOfBirth;
    } 
}