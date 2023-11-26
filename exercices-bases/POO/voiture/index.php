<?php

use class\Voiture;

require('./class/Voiture.php');

$voiture =  new Voiture('Tesla',  'Model S',  '1500' , 'Elect' , 250);

var_dump($voiture);
