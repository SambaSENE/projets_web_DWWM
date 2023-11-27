<?php

// namespace classe;

use classe\Moteur;

require "./classes/Moteur.php";

class Voiture
{
    protected string $marque;
    protected string $modele;
    protected float $poids;
    protected Moteur $moteur;

    public function __construct(string $_marque, string $_modele, float $_poids,  Moteur $_moteur)
    {
        $this->marque = $_marque;
        $this->modele = $_modele;
        $this->poids = $_poids;
        $this->moteur = $_moteur;
    }
    /**
     * retourne  la vitesse en  cours
     *
     * @return void
     */
    public function getVitesse(): mixed
    {
        if ($this->moteur->getTourne()) {

            return $this->moteur->getVitesseMax() - ($this->getPoids() * (8 / 100))  . ' km/h';
        } else {
            return false;
        }
    }

    /**
     * Get the value of marque
     *
     * @return string
     */
    public function getMarque(): string
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @param string $marque
     *
     * @return self
     */
    public function setMarque(string $marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Get the value of modele
     *
     * @return string
     */
    public function getModele(): string
    {
        return $this->modele;
    }

    /**
     * Set the value of modele
     *
     * @param string $modele
     *
     * @return self
     */
    public function setModele(string $modele): self
    {
        $this->modele = $modele;
        return $this;
    }

    /**
     * Get the value of poids
     *
     * @return float
     */
    public function getPoids(): float
    {
        return $this->poids;
    }

    /**
     * Set the value of poids
     *
     * @param float $poids
     *
     * @return self
     */
    public function setPoids(float $poids): self
    {
        $this->poids = $poids;
        return $this;
    }
}
