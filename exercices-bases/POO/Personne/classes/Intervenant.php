<?php

namespace classe;

use Personne;

class Intervenant extends Personne
{

    
    private Personne $dateNaissance;
    private float $salaire;
    private float $autreRevenus;

    public function __construct($nom, $prenom, $dateNaissance, float $_salaire, float $_autreRevenus)
    {
        parent::__construct($nom, $prenom, $dateNaissance);
        $this->salaire = $_salaire;
        $this->autreRevenus = $_autreRevenus;
    }
    /**
     * Retourne le full name
     *
     * @return string
     */
    public function  getFullNameIntervenant(): string
    {
        return $this->getNom() . ' ' . $this->getPrenom();
    }

    public function getCharge(): float
    {
        if ($this->getAge() > 55) {
            return ((($this->salaire * 20) / 100) + (($this->autreRevenus * 15) / 100)) / 2;
        } else {
            return ((($this->salaire * 20) / 100) + (($this->autreRevenus * 15) / 100));
        }
    }
    /**
     * Get the value of salaire
     *
     * @return float
     */
    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * Get the value of autreRevenus
     *
     * @return float
     */
    public function getAutreRevenus(): float
    {
        return $this->autreRevenus;
    }
}
