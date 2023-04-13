<?php
require __DIR__."/../source/Models/Author.php";
$author = new Author(
    "Joaozinho",
    "Joaozinho@gmail.com",
    "505050",
    "5669832",
    "Rua blablabla, 900",
    "IFSUL CAMPUS CHARQ"
);
var_dump($author);