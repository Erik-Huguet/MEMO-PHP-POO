<?php
require_once ('POO/Humain.php');
require_once ('POO/Femme.php');
require_once ('POO/Homme.php');


$marcelline = new Femme('marceline');
$constance = new Femme('constance');

$marcelline->showName()->marcher();

$constance->showName()->maTaille();
echo $marcelline->setSecret();
echo $marcelline->getSecret();
echo 'le secret est '.$constance->getSecret();

$adam = new Homme('adam');
$adam->showName()->marcher();
echo $adam->showName()->getForce()."\n\r";