<?php 
   
    require_once "./classes/Personne.php";
    $personne = new Personne("Samba" , "SENE" ,"2001-01-01");
    var_dump($personne->getAge("2001-01-01"));
    var_dump($personne);
    