<?php
namespace Source\Models\Financial;
class Products {
    private $ProductName;
    private $monthlyValue;

    public function __construct( $ProductName = null, $monthlyValue = null){
        $this->ProductName = $ProductName;
        $this->monthlyValue = $monthlyValue;
    }
}