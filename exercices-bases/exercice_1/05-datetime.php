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
// function getTimeLeft(string $date): string
// {
//     $dateActuelle = new DateTime('now');
//     $dateDonnee = DateTime::createFromFormat('Y/m/d', $date);

//     if (!$dateDonnee) {
//         return 'Format de date invalide';
//     }

//     $intervalle = $dateDonnee ->diff($dateActuelle) ; 

//     if ($dateDonnee < $dateActuelle) {

//         return $intervalle ->format('%R%a jours %H heures %I minutes'); // ???
//     } elseif ($dateDonnee > $dateActuelle) {

//         return $intervalle ->format('%R%a jours %H heures %I minutes'); // ???
//     } else {
//         return "Aujourd'hui";
//     }
// }

function getTimeLeft(string $date): string
{
    
 
    if (DateTime::createFromFormat('y/m/d', $date)) {
        return 'Format de date invalide';
    }

    $dateActuelle = new DateTime('now');
    $dateDonnee = date_create($date); 
    $intervalle = $dateDonnee ->diff($dateActuelle) ; // (->)???  fonction pour trouver la differeence
   
    if ($dateDonnee < $dateActuelle) { 
        
        return 'Évènement passé'; 
        
    } elseif($dateDonnee > $dateActuelle){
        echo $intervalle->m;echo '<br>';
        return $intervalle->format('%R%a jours  ');

    }else {
        return "Aujourd'hui";
    }
}
// Exemple d'utilisation :
echo getTimeLeft('2024/11/4');
