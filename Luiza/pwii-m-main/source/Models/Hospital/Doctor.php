<?php
namespace Source\Models\Hospital;

use Source\Models\User;

class Doctor extends User {
    private $CRM;
    private $specialty;
    
    public function __construct($name = null, $email = null, $password = null, $specialty = null, $CRM = null){
        parent::__construct($name, $email, $password);
        $this->CRM = $CRM;
        $this->specialty = $CRM;
    } 
}