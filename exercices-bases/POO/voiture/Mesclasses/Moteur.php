<?php

abstract class Moteur
{
    protected string $marque;
    protected float $vitesseMax = 100;

    public function __construct(string $_marque, float $_vitesseMax)
    {
        $this->marque  =  $_marque;
        $this->vitesseMax = $_vitesseMax;
    }

    /**
     * 
     *
     * @return string
     */
    public function getMarque() : string
    {
        return $this->marque;
    }
    /**
     * 
     *
     * @param string $_marque
     * @return string
     */
    public function  setMarque(string $_marque) : void
    {
        $this->marque = $_marque;
        
    }

    /**
     * 
     *
     * @return float
     */
    public function getVitesseMax() : float
    {
        return $this->vitesseMax;
    }
    /**
     * 
     *
     * @param string $_vitesseMax
     * @return float
     */
    public function  setVitesseMax(string $_vitesseMax) : void
    {
        $this->vitesseMax = $_vitesseMax;

    }
}