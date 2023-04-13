<?php
require __DIR__."/../source/Reviewer.php";
$reviwer = new Reviewer(
    "Luiza",
    "Luizamaciel@gmail.com",
    "030303",
    "5634852",
    "Rua blablabla, 250",
    "www.luiza.br"
);
var_dump($reviwer);