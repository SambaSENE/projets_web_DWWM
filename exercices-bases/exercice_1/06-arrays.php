<?php
// echo phpinfo();

/**
 *  Retourne l'element qui existe dans le tableau
 *
 * @param string $name
 * @return string
 */
function firstItem(string $name) : string 
{
    $arrayNames = ['Joe' , 'Jack' , 'William' , 'Avrelle'];

   if(in_array($name , $arrayNames)){
    return $name;
   }else {
    return 'null';
   }
}



echo firstItem('Joe');
echo '<br>';
echo firstItem('Jack');
echo '<br>';
echo firstItem('William');
echo '<br>';
echo firstItem('Avrelle');
echo '<br>';
echo firstItem('Macron');
echo '<hr>';

/**
 *  retourne  dernier element du tableau
 *
 * @param array $array
 * @return array
 */
function lastItem(array $array): array
{
    if (empty($array)) {
        return [];
    } else {
        return end($array);
    }
}

$arrayNames = ['Joe', 'Jack', 'William', 'Avrelle' , 'Lucky Luc'];
$res = lastItem($arrayNames);
var_dump($res) ;

