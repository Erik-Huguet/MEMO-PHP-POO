<?php

class Humain
{
    public $taille = 175;
    public $name ;
    private $secret = 'gold';

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
        echo $this->name. ": ";
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

    public function setSecret()
    {
        return $this->secret = 'paladium'.PHP_EOL;
    }

    public function getSecret()
    {
        return $this->secret. PHP_EOL;
    }
}

$marcelline = new Humain('marceline', 'Dupont');
$constance = new Humain('constance', 'Durand');

$marcelline->showName()->marcher();

$constance->showName()->maTaille();
echo $marcelline->setSecret();
echo $marcelline->getSecret();
echo 'le secret est '.$constance->getSecret();









