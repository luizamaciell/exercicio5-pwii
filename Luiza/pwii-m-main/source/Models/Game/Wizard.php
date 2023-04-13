<?php
namespace Source\Models\Game;


class Wizard extends Character{
    private $intelligence;

    public function __construct($name = null, $life = null, $mana = null, $force = null,$intelligence = null){
        parent::__construct($name, $life, $mana, $force);
        $this->intelligence =$intelligence;
    } 

}