<?php
require ('Bipede.php');
require ('Interface/Mamifere.php');


abstract class Humain implements \InterfaceMamifere\Mamifere
{
    use Bipede;
    public $taille = 175;
    public $name ;
    private $secret = 'gold';

    protected $force = 1;
    static $population = 0;

    public function __construct($name)
    {
        $this->name = $name ;
        echo 'Population = '.(self::$population++) . PHP_EOL;
        echo 'je suis née '.$this->name.PHP_EOL;

        echo 'population = '.self::$population. PHP_EOL;
    }

    public function __destruct()
    {
        echo 'Population = '.(self::$population--) . PHP_EOL;
        echo 'je suis morte '.$this->name.PHP_EOL;

        echo 'population = '.self::$population .PHP_EOL;
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
        $this->secret = 'paladium'.PHP_EOL;
    }

    public function getSecret()
    {
        return $this->secret. PHP_EOL;
    }

    /**
     * @return int
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * @param int $force
     * @return Humain
     */
    public function setForce($force)
    {
        $this->force = $force;
        //return $this;
    }

    public function pilosite()
    {
        echo 'J\'ai du poil !!'.PHP_EOL;

    }
}










