<?php

abstract class Moteur
{
    protected string $marque;
    protected float $vitesseMax;
    protected bool $isStop = false;

    public function __construct(string $_marque, float $_vitesseMax, bool $_isStop)
    {
        $this->marque  =  $_marque;
        $this->vitesseMax = $_vitesseMax;
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
     * Get the value of vitesseMax
     *
     * @return float
     */
    public function getVitesseMax(): float
    {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     *
     * @param float $vitesseMax
     *
     * @return self
     */
    public function setVitesseMax(float $vitesseMax): self
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }
    /**
     *  return true if isStop => false
     *
     * @return boolean
     */
    public function start() : bool
    {
        if (!$this->isStop) {
            return true;
        }
        return false;
    }
    /**
     * return flase if isStop => true
     *
     * @return boolean
     */
    public function stop() : bool
    {
        if($this->isStop == false)
        {
            return true;
        }
        return false;
    }
}
