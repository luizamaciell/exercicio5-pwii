<?php
namespace Source\Models;
class Address{
    private $street;
    private $number;
    private $city;

    public function __construct( $street = null, $number = null, $city = null)
{
    $this->$street = $street;
    $this->number = $number;
    $this->city = $city;

}
public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->$street = $street;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
}