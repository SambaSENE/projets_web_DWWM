<?php 
     class Adresse
     {
        private int $numRue;
        private string $nomRue;
        private string $cp;
        private string $nomDeLaCommune;

        public function __construct(int $_numRue , string $_nomRue , string $_cp , string $_nomDeLaCommune)
        {
            $this->numRue = $_numRue;
            $this->nomRue = $_nomRue;
            $this->cp = $_cp;
            $this->nomDeLaCommune = $_nomDeLaCommune;
        }
        /**
         * Retourne adresse du client en chaine de caractere
         *
         * @return string
         */
        public function  getAdresse() : string
        {
            return $this->numRue . ' ' . $this->nomRue .' ' . $this->cp . ' ' . $this->nomDeLaCommune;
        }
     }