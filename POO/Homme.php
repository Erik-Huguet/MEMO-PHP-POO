<?php

class Homme extends Humain
{

    public function __construct($name)
    {
        parent::__construct($name);
        //$this->name =$name;
    }

    /*public function setForce($force)
    {
        $this->force = 2;
        return $this;
    }*/
    public function getForce()
    {
        return $this->force +1 ;
    }
}