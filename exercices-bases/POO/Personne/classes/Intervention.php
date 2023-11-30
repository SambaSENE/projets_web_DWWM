<?php

namespace classe;

use DateTime;

class Intervention {
    private $numClient;
    private $numIntervenant;
    private $dateIntervention;
    private $heureIntervention;
    private $description;

    public function __construct($numClient, $numIntervenant, $dateIntervention, $heureIntervention, $description) {
        $this->numClient = $numClient;
        $this->numIntervenant = $numIntervenant;
        $this->dateIntervention = new DateTime($dateIntervention);
        $this->heureIntervention = $heureIntervention;
        $this->description = $description;
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

    public function getDescription() {
        return $this->description;
    }
}
