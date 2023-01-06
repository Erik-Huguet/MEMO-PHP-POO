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
        echo 'oui, je peux enfanter'.PHP_EOL;
    }

    public function pilosite()
    {
        echo 'J\'ai bien moins de poil que l\'hommes !!!!'.PHP_EOL;

    }
}