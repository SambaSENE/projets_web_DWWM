<?php



    class VoitureCourse extends Voiture
    {
        
        public function getVitesseSport()
        { 
           if($this->moteur->getTourne()){
               return   $this->moteur->getVitesseMax() - ($this->getPoids() * (4 / 100)) . ' km/h';  

           }else{
            return false;
           }
        }

    }