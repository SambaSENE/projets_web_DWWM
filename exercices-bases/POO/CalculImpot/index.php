<?php
   include "./CalculImpot/classes/ImpotCalcultator.php";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nom = $_POST["nom"];
        $revenu = $_POST["revenu"];
    
        $impot = CalculImpot($revenu);
    
        echo "$nom, votre impôt est de $impot euros.";
    }
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
        <h1>Calcul de l'impot</h1>
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
                <button type="submit">Valider</button>
            </div>
            <div>
                <label for="mensualite">Mensualité : </label>
                <input type="number" name="mensualite" id="mensualite" readonly>
            </div>
            
        </form>

        
    </main>
</body>

</html>