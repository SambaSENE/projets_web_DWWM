<?php

    class Client extends Personne
    {
        private string $numClient;
        private Personne $fullName;
        private Adresse $adresse;

        public function  __construct(string $_numClient , Personne $_fullName , Adresse $_adresse)
        {
        
            $this->numClient = $_numClient;
            $this->fullName = $_fullName;
            $this->adresse = $_adresse;
        }

        public function getFullClient() : string
        {
            return $this->getNom() .' ' . $this->getPrenom();
        }
        
        public function getAdresseClient() : string
        {
            return $this->adresse->getAdresse();
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