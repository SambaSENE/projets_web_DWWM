<?php

use classe\Intervenant;
use classe\Intervention;

   require_once "./classes/Personne.php";
   require_once "./classes/Adresse.php";
   require_once "./classes/Intervenant.php";
   require_once "./classes/Client.php";
   require_once "./classes/Intervention.php";
    
    $adresse = new Adresse(4 , 'allee du muguet' ,  '54000' , 'Nancy');
    var_dump($adresse->getAdresse());
    echo '<hr>';
    
    $intervenant = new Intervenant('Sene' ,'Samba' , '1960-23-01', 2500.00 , 800.00);
    
    var_dump($intervenant->getFullNameIntervenant());
    var_dump($intervenant->getCharge());

    $client = new Client(12345, 'Doe','jonh' , 'ùqfzefzefzef' , new Adresse(4 ,  'ggggg' , '68000' , 'colmar'));
     var_dump($client);
    