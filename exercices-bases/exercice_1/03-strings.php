<?php
    /**
     *  le nom Albert Einstein'
     *
     * @return string
     */
     function getMC2() : string
     {
        return 'Albert Einstein';
     }

     echo getMC2();

     /**
      * concatenation
      *
      * @param string $name
      * @param string $lastName
      * @return string
      */
     function getName(string $name , string $lastName): string
     {
        return $name.$lastName;
     }

     echo getName('Samba' , 'SENE');