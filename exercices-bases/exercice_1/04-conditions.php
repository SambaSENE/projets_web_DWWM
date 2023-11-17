<?php

/**
 * Mojor
 *
 * @param integer $age
 * @return boolean
 */
function isMajor(int $age): bool
{
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}



echo var_dump(isMajor(11));
echo ('</br>');
echo var_dump(isMajor(45));
echo ('</br>');

function getRetired(int $age): string
{
    $ageRetaite = 60;

    if ($age === $ageRetaite) {
        return "Vous êtes à la retraite depuis cette année";
    } elseif ($age >= $ageRetaite) {
        return ' Vous êtes à la retraite depuis ' . $age - $ageRetaite   . 'ans';
    } elseif ($age >= 0 && $age < $ageRetaite) {
        return 'Il vous reste ' . $ageRetaite - $age . ' ans avant la retraite';
    } else {
        return ' Vous n’êtes pas encore né ';
    }
}

echo ('</br>');
echo getRetired(20);
echo ('</br>');
echo getRetired(-2);
echo ('</br>');
echo getRetired(60);
echo ('</br>');
echo getRetired(72);
echo ('</br>');

function getMax(float $a, float $b, float $c): float
{
    if ($a == $b || $a == $c || $c == $b) {
        return 0;
    } elseif ($b > $a && $b > $c) {
        return $b;
    } elseif ($c > $a && $c > $b) {
        return $c;
    } else {
        return $a;
    }
}

echo ('<br>');
echo getMax(4.5, 2.1, 3.8);
echo ('<br>');

echo getMax(4.1, 4.1, 3.9);
echo ('<br>');

echo getMax(2.9, 4.2, 3.8);
/**
 * 
 *
 * @param string $pays
 * @return string
 */
function capitalCity(string $pays): string
{
    switch ($pays) {
        case $pays == 'France';
            return 'Paris';
            break;
        case $pays == 'Allemagne';
            return 'Berlin';
            break;
        case $pays == 'Italie';
            return 'Rome';
            break;
        case $pays == 'Maroc';
            return 'Rabat';
            break;
        case $pays == 'Espagne';
            return 'Madrid';
            break;
        case $pays == 'Portugal';
            return 'Lisbonne';
            break;
        case $pays == 'Anglettere';
            return 'Londres';
            break;
        default:
            return 'Capitale inconnue ';
            break;
    }
}
echo ('<br>');
echo capitalCity('France');
echo ('<br>');
echo capitalCity('Allemagne');
echo ('<br>');
echo capitalCity('Maroc');
echo ('<br>');
echo capitalCity('Italie');
echo ('<br>');
echo capitalCity('Anglettere');
echo ('<br>');
echo capitalCity('Espagne');
echo ('<br>');
echo capitalCity('Suisse');
