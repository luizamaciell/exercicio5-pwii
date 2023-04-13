<?php
namespace Source\Models\Game;


class Warrior extends Character{
    private $defense;
    public function __construct($name = null, $life = null, $mana = null, $force = null,$defense = null){
        parent::__construct($name, $life, $mana, $force);
        $this->defense = $defense;
    } 
}