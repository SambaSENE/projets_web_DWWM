<?php

namespace MesClasses;

use Moteur;

class Voiture 
{
    protected string $marque;
    protected string $model;
    protected float $poids;
    protected Moteur $moteur;

   public function __construct(string $_marque , string $_model ,  float $_poids , Moteur $_moteur)
   {
        $this->marque = $_marque;
        $this->model = $_model;
        $this->poids = $_poids;
        $this->moteur = $_moteur;
   }

   

}