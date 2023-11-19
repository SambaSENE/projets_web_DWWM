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
 * Retourne le dernier élément du tableau.
 *
 * @param array $array
 * @return mixed|null
 */
function lastItem(array $array)
{
    if (empty($array)) {
        return null;
    } else {
        return end($array);
    }
}

$arrayNames = ['Joe', 'Jack', 'William', 'Avrelle', 'Lucky Luc'];
$res = lastItem($arrayNames);
echo $res;
echo '<hr>';

/**
 * Undocumented function
 *
 * @param array $array
 * @return void
 */
function sortItem(array $array)
{
    if(empty($array)){
        return 'Tableau vide';
    }else {
        return sort($array);
    }
}
$arrayNames = ['Joe', 'Jack', 'William', 'Avrelle', 'Lucky Luc']; 
$res = sortItem($arrayNames);
var_dump( $res);

