<?php 

namespace class;

class Moteur
{
    protected string $marque;
    protected float $vitesseMax;
    protected bool  $isStart = true;

    public function __construct(string $_marque , float $_vistesseMax ,  bool $_isStart)
    {
        $this->marque = $_marque;
        $this->vitesseMax = $_vistesseMax;  
        $this->isStart = $_isStart;
    }
    /**
     * retrurn true if isStart => false
     *
     * @return boolean
     */
    public function start(): bool
    {
        if(!$this->isStart){
            return true;
        }else {
            return false;
        }
    }  

    /**
     * return false if isStart => true
     *
     * @return boolean
     */
    public function stop() : bool
    {
        if($this->isStart)
        {
            return false;
        }else {
            return true;
        }
    }
    /**
     * Get the value of marque
     *
     * @return string
     */
    public function getMarque(): string {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @param string $marque
     *
     * @return self
     */
    public function setMarque(string $marque): self {
        $this->marque = $marque;
        return $this;
    }

    /**
     * Get the value of vitesseMax
     *
     * @return float
     */
    public function getVitesseMax(): float {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     *
     * @param float $vitesseMax
     *
     * @return self
     */
    public function setVitesseMax(float $vitesseMax): self {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }
}