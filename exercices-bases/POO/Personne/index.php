<?php

use classe\Intervenant;

   require_once "./classes/Personne.php";
   require_once "./classes/Adresse.php";
   require_once "./classes/Intervenant.php";
    
    $adresse = new Adresse(4 , 'allee du muguet' ,  '54000' , 'Nancy');
    var_dump($adresse->getAdresse());

    $intervenant = new Intervenant('Sene' ,'Samba' , '1985-23-01', 2500.00 , 800.00);
    var_dump($intervenant->getFullNameIntervenant());
    var_dump($intervenant->getCharge());
    