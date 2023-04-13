<?php

require __DIR__. "/../source/autoload.php";

use Source\Models\Address;
use Source\Models\User;
use Source\Models\Financial\Client;
//use Source\Models\Financial\Employee;
use Source\Models\Financial\Saving;
//use Source\Models\Financial\Current;
//use Source\Models\Financial\Products;

$address = new Address("Rua A", "5555", "Casa");
var_dump($address);

$user = new User("Luiza", "Luizamaciel@gmail.com", "1234", "04456320050", "140507", $address);
var_dump($user);

$Saving01 = new saving("1255", "5000.0000", "09/09");
$Saving02 = new saving("4444", "40.000", "08/08");
$client->addSaving($saving01);
$client->addSaving($saving02);

//var_dump($Saving);
//$Employee = new employee();
//$Client = new client();
//$Employee = new employee();
//$Current = new  current();
//$Products = new Products();
//var_dump($Client, $Employee, $Saving, $Current, $Products);