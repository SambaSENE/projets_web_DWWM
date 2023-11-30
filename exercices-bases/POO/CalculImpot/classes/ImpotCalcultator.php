<?php

class ImpotCalculator {
    // Définir les constantes pour les taux d'impôt
    const TAUX_INF = 0.09;
    const TAUX_SUP = 0.14;

    // Fonction pour calculer l'impôt
    public static function calculImpot($revenu) {
        if ($revenu <= 15000) {
            // Pour les revenus inférieurs à 15 000 euros
            return $revenu * self::TAUX_INF;
        } else {
            // Pour les revenus supérieurs à 15 000 euros
            $impotInf = 15000 * self::TAUX_INF; // Part inférieure taxée à 9%
            $impotSup = ($revenu - 15000) * self::TAUX_SUP; // Part supérieure taxée à 14%
            return $impotInf + $impotSup;
        }
    }
}
?>

