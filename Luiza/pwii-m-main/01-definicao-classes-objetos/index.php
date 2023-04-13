<?php

require  __DIR__ ."/../source/user.php";
//exemplo 01

//$user = new User();

//$user -> name = "Luiza";

//$user -> email = "luiza@gmail";
//var_dump($user);

//echo "Olá, {$user -> name}! seu email {$user -> email}";

$user = new User("Luiza" ,"luiza@gmail.com");

var_dump($user);


