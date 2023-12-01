<?php

class Pret
{
    private $capital;
    private $taux;
    private $duree;

    public function __construct($capital, $taux, $duree)
    {
        $this->capital = $capital;
        $this->taux = $taux;
        $this->duree = $duree;
    }

    public function calculerMensualite()
    {

        $tauxMensuel = $this->taux / 12;
        $nombreMois = $this->duree * 12;

        $factoriel = 1;
        for ($i = 1; $i <= $nombreMois; $i++) {
            $factoriel *= $i;
        }

        $q = 1 - pow(1 + $tauxMensuel, -$nombreMois);

        return $this->capital * $tauxMensuel / $q;
    }

    // public function genererTableauAmortissement()
    // {
    //     $mensualite = $this->calculerMensualite();

    //     $tableau = array();

    //     for ($mois = 1; $mois <= $this->duree * 12; $mois++) {
    //         $capitalRestantDu = $this->capital - ($mensualite * ($mois - 1));
    //         $partInteret = $capitalRestantDu * $this->taux / 12;
    //         $partAmortissement = $mensualite - $partInteret;

    //         $tableau[] = array(
    //             $mois,
    //             $capitalRestantDu,
    //             $partInteret,
    //             $partAmortissement,
    //         );
    //     }

    //     return $tableau;
    // }

    /**
     * Get the value of capital
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Get the value of taux
     */
    public function getTaux()
    {
        return $this->taux;
    }

    /**
     * Get the value of duree
     */
    public function getDuree()
    {
        return $this->duree;
    }
}
