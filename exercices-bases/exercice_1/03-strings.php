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
     echo('</br>');

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
     echo('</br>');
     function getNameMin(string $name , string $lastName): string
     {
        $fullName = strtolower($name . " " . $lastName) ;
        return $fullName;
      }
      echo getNameMin('Samba' , 'SENE');
      echo('</br>');

      /**
       * appel de function
       *
       * @param string $name
       * @param string $lastName
       * @return string
       */
     function askUser(string $name , string $lastName) : string
     {
      return 'Bonjour ' .getNameMin($name , mb_strtoupper($lastName)) .' , connaissez-vous '. getMC2().' ?' ;
     }

     echo askUser('samba', 'sene');
     echo('</br>');

     