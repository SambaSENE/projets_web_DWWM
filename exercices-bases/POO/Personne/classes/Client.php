<?php
include "./Adresse.php";

class Client extends Personne
{
    private int $numClient;
    private Adresse $adresse;
    public function  __construct(int $_numClient,  string $_nom ,  string $_prenom , string $_dateNaissance ,  Adresse $_adresse)
    {

        parent::__construct($_nom , $_prenom , $_dateNaissance);
        $this->numClient = $_numClient;
        $this->adresse = $_adresse;
    }


    
    /**
     * Get the value of numClient
     *
     * @return int
     */
    public function getNumClient(): int
    {
        return $this->numClient;
    }

    /**
     * Get the value of adresse
     *
     * @return Adresse
     */
    public function getAdresse(): Adresse {
        return $this->adresse;
    }
}
