<?php
namespace Source\Models\Financial;
class Current {
    private $accountNumber;
    private $balance;
    private $creditLimit;
    private $fees;

    public function __construct( $accountNumber = null, $balance = null, $creditLimit = null, $fees =null){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->creditLimit = $creditLimit;
        $this->fees = $fees;
    }
}