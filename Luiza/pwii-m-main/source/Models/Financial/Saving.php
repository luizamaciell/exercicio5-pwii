<?php
namespace Source\Models\Financial;
class Saving {
    private $accountNumber;
    private $balance;
    private $savingsAnniversaryDate;

    public function __construct( $accountNumber = null, $balance = null, $savingsAnniversaryDate = null){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->savingsAnniversaryDate = $savingsAnniversaryDate;
    }
}