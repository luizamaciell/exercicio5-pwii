<?php

require __DIR__. "/../source/autoload.php";

use Source\Models\Game\Character;
use Source\Models\Game\Warrior;
use Source\Models\Game\Wizard;
use Source\Models\Game\Robber;

$Character = new Character();
$Warrior = new Warrior();
$Wizard = new Wizard();
$Robber = new Robber();

var_dump( $Warrior,$Wizard,$Robber);