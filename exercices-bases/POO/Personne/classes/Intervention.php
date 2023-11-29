<?php

namespace classe;

use Client;
use DateTime;

class Intervention 
{
    private Client $numClient;
    private Intervenant $numIntervenant;
    private DateTime $dateIntervention;
    private DateTime $heureIntervention;

    public function __construct(Client $_numClient , Intervenant $_numItervenant , DateTime $_dateIntervention  , DateTime $_heureItervention)
    {
        $this->numClient = $_numClient->getNumClient();
        $this->numIntervenant = $_numItervenant->getPrenom();
        $this->dateIntervention = $_dateIntervention->format('d/m/Y');
        $this->heureIntervention = $_heureItervention->format('H:i:s') ;
    }

    /**
     * Get the value of numClient
     *
     * @return Client
     */
    public function getNumClient(): Client {
        return $this->numClient;
    }

    /**
     * Get the value of numIntervenant
     *
     * @return Intervenant
     */
    public function getNumIntervenant(): Intervenant {
        return $this->numIntervenant;
    }

    /**
     * Get the value of dateIntervention
     *
     * @return DateTime
     */
    public function getDateIntervention(): DateTime {
        return $this->dateIntervention;
    }

    /**
     * Get the value of heureIntervention
     *
     * @return DateTime
     */
    public function getHeureIntervention(): DateTime {
        return $this->heureIntervention;
    }
}
