<?php

require "./Model/MaTable.php";

$maTable = new MaTable('restaurant');

?>

<!DOCTYPE html>
<html lang="en">

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

        <div class="container-fluid">

            <?php foreach ($maTable->findElement() as $restaurant) : ?>
                <div class="d-inline-block card text-bg-white mb-3" style="max-width: 18rem;">
                    <div class="card-header"><?= $restaurant['nom'] ?></div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $restaurant['adresse'] ?></h5>
                        <h5 class="card-title"><?= $restaurant['prix'] . " Euro"?></h5>
                        <h5 class="card-title"><?= $restaurant['note']  ?></h5>
                        <p class="card-text"><?= $restaurant['commentaire'] ?></p>
                        <h5 class="card-title"><?= $restaurant['visite'] ?></h5>
                        <button type="button" class="btn btn-success">Modiffier</button>
                        <button type="button" class="btn btn-danger">Supprimer</button>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </main>
</body>

</html>