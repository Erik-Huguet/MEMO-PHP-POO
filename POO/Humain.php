<?php

class Humain
{
    public $taille = 175;
    public $name ;

    public function __construct($name)
    {
        $this->name = $name ;

        echo 'je suis née '.$this->name.PHP_EOL;
    }

    public function __destruct()
    {
        echo 'je suis morte '.$this->name.PHP_EOL;

    }

    public function showName(){
        echo $this->name. " ";
        return $this;
    }

    public function marcher()
    {
        echo 'je marche '.PHP_EOL;

    }

    public function maTaille()
    {
        echo "je mesure ". ( $this->taille + 1) .PHP_EOL;
        return $this;
    }
}

$marcelline = new Humain('marceline');
$constance = new Humain('constance');

$marcelline->showName()->marcher();

$constance->showName()->maTaille();

unset($marcelline);








