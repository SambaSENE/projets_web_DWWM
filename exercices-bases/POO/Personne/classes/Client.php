<?php

    class Client extends Personne
    {
        private string $numClient;
        private Adresse $adresse;

        public function  __construct(string $_numClient ,  $_adresse)
        {
            // parent::__construct($_adresse);
            $this->numClient = $_numClient;
            $this->adresse = $_adresse;
        }

        

        /**
         * Get the value of numClient
         *
         * @return string
         */
        public function getNumClient(): string {
                return $this->numClient;
        }
        
        
    }