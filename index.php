<?php
require_once ('class/Humain.php');
require ('class/Homme.php');
require ('class/Femme.php');
require_once ('class/Bipede.php');
require_once ('Interface/Mamifere.php');



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
$marcelline->faireEnfant();
$adam->courir();
$marcelline->courir();
$adam->pilosite();
$marcelline->pilosite();

