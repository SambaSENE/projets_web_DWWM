<?php

namespace classe;

use Client;
use DateTime;
use Personne;

class Intervention
{
    private Client $n;
    private Client $adresse;
    private Intervenant $fullNameIntervenant;
    private DateTime $dateIntervention;
    private DateTime $heureIntervention;
    
    public function __construct(Client $_fullNameClient , Client $_adresse , Intervenant $_fullNameIntvenant, DateTime $_dateIntervention , DateTime $_heureIntervention)
    {
      $this->fullNameClient = $_fullNameClient;
      $this->adresse = $_adresse;
      $this->fullNameClient = $_fullNameClient;
      $this->dateIntervention = $_dateIntervention;
      $this->heureIntervention = $_heureIntervention;
    }
    /**
     *  retoune le nom complet du client
     *
     * @return string
     */
    public function getFullNameClient() : string
    {
        return $this->fullNameClient->getFullClient();
    }
    /**
     * Retourne adresse de l'intervention
     *
     * @return string
     */
    public function getAdresseIntervention() : string
    {
        return $this->adresse->getAdresseClient();
    }

}
