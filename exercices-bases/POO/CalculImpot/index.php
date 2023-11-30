<?php
require './classes/Pret.php';

$pret = new Prêt($_POST['capital'], $_POST['taux'], $_POST['duree']);

$mensualite = $pret->calculerMensualite();



$tableau = $pret->genererTableauAmortissement();




?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Calcul de l'impot</title>
</head>

<body>
    <main>
        <h1>Calcul </h1>
        <form action="" method="POST">
            <div>
                <label for="capital">Capital emprenté : </label>
                <input type="number" name="capital" id="capital">
            </div>
            <div>
                <label for="taux">Taux intérêt en % : </label>
                <input type="number" name="taux" id="taux" min="0" max="100">
            </div>
            <div>
                <label for="duree">Durée : </label>
                <input type="number" name="duree" id="duree">
            </div>
            <div>
                <button type="submit">Valider</button>
            </div>
            <div>
                <label for="mensualite">Mensualité : </label>
                <input type="number" name="mensualite" id="mensualite" readonly value="<?= $revenu ?>">
            </div>

        </form>

        <table>
            <thead>
                <tr>
                    <th>Numero de mois</th>
                    <th>Intérêts</th>
                    <th>Partie Amortissement</th>
                    <th>Capital restant dû</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($tableau as $ligne) {
                    echo '<tr>';
                    echo '<td>' . $ligne[0] . '</td>';
                    echo '<td>' . number_format($ligne[1], 2) . '</td>';
                    echo '<td>' . number_format($ligne[2], 2) . '</td>';
                    echo '<td>' . number_format($ligne[3], 2) . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </main>
</body>

</html>