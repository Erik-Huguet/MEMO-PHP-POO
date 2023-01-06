<?php

class Femme extends Humain
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->name =$name;
    }
    public function faireEnfant()
    {
        echo "oui, je peux enfanter".PHP_EOL;
    }
}