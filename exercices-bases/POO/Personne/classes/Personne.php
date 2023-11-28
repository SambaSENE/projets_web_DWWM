<?php

 class Personne
{
    private string $nom;
    private string $prenom;
    private  $dateNaissance;

    public function  __construct(string $_nom, string $_prenom,  $_dateNaissance)
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->dateNaissance = $_dateNaissance;
    }

    function getAge()
    {
        // Convertit la date de naissance en format timestamp
        $this->dateNaissance = strtotime($this->dateNaissance);
    
        // Obtient la date du jour en format timestamp
        $dateDuJour = time();
    
        // Calcul l'écart entre les deux dates en secondes
        $diff = $dateDuJour - $this->dateNaissance;
    
        // Convertit l'écart en années
        $age = floor($diff / (60 * 60 * 24 * 365));
    
        // Renvoie l'âge
        return $age;
    }
    
    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of prenom
     *
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @param string $prenom
     *
     * @return self
     */
    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }
}
