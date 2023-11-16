<?php
    /**
     * Addition
     * Exercice 2_A
     *
     * @param integer $number1
     * @param integer $number2
     * @return integer
     */
    function getSum(int $number1 , int $number2):int
    {
        return $number1 + $number2;
    }

    echo  getSum(4 , 5);

    /**
     * Soustraction
     * Exercice 2_B
     *
     * @param integer $nb1
     * @param integer $nb2
     * @return integer
     */
     function getSub(int $nb1, int $nb2): int
     {
        return $nb1-$nb2;
     }

     echo getSub(1,4);

     /**
      *  Multiplication
      *
      * @param float $nb1
      * @param float $nb2
      * @return float
      */
     function getMulti(float $nb1, float $nb2) : float
     {
        return $nb1 * $nb2 ;
     }

     echo getMulti(5.,4);

     /**
      * Division
      *
      * @param integer $nb1
      * @param integer $nb2
      * @return mixed
      */
     function getDiv(int $nb1, int $nb2): mixed
     {
         if ($nb2 !== 0) {
             $res = $nb1 / $nb2;
             return $res;
         } else {
             return "une division par zéro est impossible";
         }
     }
     
     echo getDiv(4, 0);

     

   
     