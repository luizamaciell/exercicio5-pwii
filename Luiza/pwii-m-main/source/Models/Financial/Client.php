<?php
namespace Source\Models\Financial;

use Source\Models\User;

class Client extends User {
    private $income;
    private $profession;

    public function __construct($name = null, $email = null, $password = null,$document = null, $dateOfBirth = null, $address = null, $income = null, $profession = null){
        parent::__construct($name, $email, $password,$document, $dateOfBirth, $address);
        $this->income = $income;
        $this->profession = $profession;
        }

        public function addSaving (Saving $saving){
            $this->saving[] = $saving
         var_dump($this->saving);
        }
}







