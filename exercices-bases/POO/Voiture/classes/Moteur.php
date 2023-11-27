<?php

    namespace classe;

    class Moteur
    {
       
        protected float $vitesseMax = 100;
        protected bool $tourne;

        public function __construct( float $_vitesseMax , bool $_tourne)
        {
           
            $this->vitesseMax = $_vitesseMax;
            $this->tourne = $_tourne;
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

        /**
         * Get the value of tourne
         *
         * @return bool
         */
        public function getTourne(): bool {
                return $this->tourne;
        }

        /**
         * Set the value of tourne
         *
         * @param bool $tourne
         *
         * @return self
         */
        public function setTourne(bool $tourne): self {
                $this->tourne = $tourne;
                return $this;
        }
    }