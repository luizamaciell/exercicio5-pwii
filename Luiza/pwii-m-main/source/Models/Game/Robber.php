<?php
namespace Source\Models\Game;

class Robber extends Character{
    private $agility;
    
    public function __construct($name = null, $life = null, $mana = null, $force = null, $agility = null){
        parent::__construct($name, $life, $mana, $force);
        $this->agility = $agility;
    } 
}
