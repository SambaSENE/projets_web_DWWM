<?php

class Client extends Personne
{
    private int $numClient;

    public function  __construct(int $_numClient)
    {
        $this->numClient = $_numClient;
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
}
