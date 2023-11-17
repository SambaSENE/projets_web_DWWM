<?php
/**
 *  retoune date en chaine de caractere
 *
 * @return string
 */
function getToday(): string
{
    $date = date_create();
    return date_format($date, 'd/m/y');
}

echo getToday();
echo '<br>';


/**
 *  
 *
 * @param string $date
 * @return string
 */
function getTimeLeft(string $date): string
{
    $dateActuelle = new DateTime();
    $dateDonnee = DateTime::createFromFormat('d/m/Y', $date);

    if (!$dateDonnee) {
        return 'Format de date invalide';
    }

    $intervalle = $dateDonnee ->diff($dateActuelle) ; // (->)???  fonction pour trouver la differeence

    if ($dateDonnee < $dateActuelle) {

        return $intervalle ->format('%R%a jours %H heures %I minutes'); // ???
    } elseif ($dateDonnee > $dateActuelle) {

        return $intervalle ->format('%R%a jours %H heures %I minutes'); // ???
    } else {
        return "Aujourd'hui";
    }
}

// Exemple d'utilisation :
echo getTimeLeft('23/01/2024');
