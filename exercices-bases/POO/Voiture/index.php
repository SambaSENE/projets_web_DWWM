<?php

use classe\Moteur;

require_once "./classes/Voiture.php";
require "./classes/VoitureCourse.php";


$voiture = new Voiture('Tesla' , 'Model 5 ' ,1500 , new Moteur(255 , true) );
   
var_dump($voiture);
echo '<br>';
var_dump( $voiture->getVitesse());

echo '<hr>';

$voitureSport = new VoitureCourse('Maclaren ' ,  'f1' , 450 , new Moteur(400 , true));

var_dump($voitureSport);
var_dump($voitureSport->getVitesseSport());