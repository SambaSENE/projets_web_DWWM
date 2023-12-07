<?php

require "./Model/MaTable.php";

$maTable = new MaTable('restaurants');

if (isset($_POST['nom']) &&  isset($_POST['adresse']) && isset($_POST['prix']) && isset($_POST['commentaire']) && isset($_POST['note']) && isset($_POST['visite'])) {

    $maTable->insertElement($_POST["nom"], $_POST["adresse"], floatval($_POST['prix']), $_POST["commentaire"], intval($_POST["note"]), $_POST["visite"]);
}


foreach ($maTable->findElement() as $value) {
    echo $value['id'];
}

?>

<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header class="container">
        <div class="container-fluid">
            <button type="button" class="btn btn-success">Ajouter</button>
        </div>
    </header>
    <main class="container">
        <form action="" method="POST" class="d-inline-block container-fluid" style="width: 25%">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" placeholder="Votre nom">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse :</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="adresse" placeholder="Adresse">
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix :</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix" placeholder="Prix">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Commentaire :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="commentaire" rows="4"></textarea>
                    </div>
                </label>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Notes :</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="note" placeholder="Notes">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Visites :</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" name="visite" placeholder="Visites">
            </div>

            <input class="btn btn-primary" type="submit" value="Submit">
        </form>

        <div class="container-fluid">

            <?php foreach ($maTable->findElement() as $restaurant) : ?>
                <div class="d-inline-block card text-bg-white mb-3" style="max-width: 18rem;">
                    <div class="card-header"><?= $restaurant['nom'] ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $restaurant['adresse'] ?></h5>
                        <h5 class="card-title"><?= round($restaurant['prix'], 2) . " Euro" ?></h5>
                        <h5 class="card-title"><?= $restaurant['note']  ?></h5>
                        <p class="card-text"><?= $restaurant['commentaire'] ?></p>
                        <h5 class="card-title"><?= $restaurant['visite'] ?></h5>
                        <button type="button" class="btn btn-success">Modiffier</button>
                        <button type="button" value="<?= $maTable->deleteElement($restaurant['id'])?>" class="btn btn-danger">Supprimer</button>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </main>

    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>