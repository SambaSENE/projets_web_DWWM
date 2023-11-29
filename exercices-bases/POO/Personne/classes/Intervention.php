<?php

namespace classe;


use Client;
use DateTime;

class Intervention {
    private $numClient;
    private $numIntervenant;
    private $dateIntervention;
    private $heureIntervention;

    public function __construct($numClient, $numIntervenant, $dateIntervention, $heureIntervention) {
        $this->numClient = $numClient;
        $this->numIntervenant = $numIntervenant;
        $this->dateIntervention = $dateIntervention;
        $this->heureIntervention = $heureIntervention;
    }

    public function getNumClient() {
        return $this->numClient;
    }

    public function getNumIntervenant() {
        return $this->numIntervenant;
    }

    public function getDateIntervention() {
        return $this->dateIntervention;
    }

    public function getHeureIntervention() {
        return $this->heureIntervention;
    }
}

