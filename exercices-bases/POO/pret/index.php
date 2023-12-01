<?php
include "./classes/Pret.php";

if (!empty($_POST['capital']) && !empty($_POST['taux'])  && !empty($_POST["duree"])) {
    
    $pret = new Pret($_POST['capital'], $_POST['taux'], $_POST['duree']);
    $mensualite = $pret->calculerMensualite($_POST['capital'], $_POST['taux'], $_POST['duree']);
    
    $amortizationTable = $pret->genererTableauAmortissement();
}
var_dump($mensualite);

?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Calcul de la mensualité</title>
</head>

<body>
    <main>
        <h1>Calcul de prêt</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div>
                <label for="capital">Capital emprunté : </label>
                <input type="number" name="capital" id="capital">
            </div>
            <div>
                <label for="duree">Durée empruntée en mois : </label>
                <input type="number" name="duree" id="duree">
            </div>
            <div>
                <label for="taux">Taux d'intérêt en % : </label>
                <input type="number" name="taux" id="taux" min="0" max="100">
            </div>
            <div>
                <button type="submit">Valider</button>
            </div>
            <div>
                <label for="mensualite">Mensualité : </label>
                <input type="number" name="mensualite" id="mensualite" readonly value="<?= isset($mensualite) ? $mensualite : '' ?>">
            </div>
        </form>

    </main>

    <table>
        <thead>
            <tr>
                <th>Numéro de mois</th>
                <th>Intérêt</th>
                <th>Partie Amortissement</th>
                <th>Capital restant</th>
            </tr>
        </thead>
        <tbody>
            <?= $amortizationTable ?>
        </tbody>
    </table>
</body>

</html>