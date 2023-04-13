<?php
namespace Source\Models\Game;

class Character{
    private $name;
    private $life;
    private $manna;
    private $force;
    
    public function __construct($name = null, $life = null, $manna = null, $force = null){
        $this->name = $name;
        $this->life = $life;
        $this->manna = $manna;
        $this->force = $force;   
    } 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLife()
    {
        return $this->life;
    }

    public function setLife($life)
    {
        $this->life = $life;
    }
    public function getManna()
    {
        return $this->manna;
    }

    public function setManna($manna)
    {
        $this->manna = $manna;
    }
    public function getForce()
    {
        return $this->force;
    }

    public function setForce($force)
    {
        $this->force = $force;
    }
}