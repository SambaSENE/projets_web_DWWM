<?php

use classe\Moteur;

require_once "./classes/Voiture.php";
require "./classes/VoitureCourse.php";

try {
    $voiture = new Voiture('Tesla', 'Model 5', 1500, new Moteur(255, true));

    var_dump($voiture);
    echo '<br>';
    var_dump($voiture->getVitesse());
    echo '<hr>';

    $voitureSport = new VoitureCourse('Maclaren', 'f1', 450, new Moteur(400, true));

<<<<<<< Updated upstream
$voitureSport = new VoitureCourse('Maclaren ' ,  'f1' , 450 , new Moteur(400 , true));

var_dump($voitureSport);
var_dump($voitureSport->getVitesseSport());

$voitureSport2 = new VoitureCourse('Mazda' , 'f1' , 400 , new Moteur(450 , true));
echo '<hr>';
var_dump($voitureSport2);
var_dump($voitureSport2->getVitesseSport());
=======
    var_dump($voitureSport);
    var_dump($voitureSport->getVitesseSport());
} catch (Exception $e) {
    echo 'Erreur de construction : ' . $e->getMessage();
}
>>>>>>> Stashed changes
