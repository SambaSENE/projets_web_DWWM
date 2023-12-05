<?php

require "./Model/MaTable.php";

$maTable = new MaTable('restaurant');

// var_dump($maTable->findElement());



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
    <main class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php foreach ($maTable->findElement() as $restaurant) : ?>

                        <td scope="row"><?= $restaurant['nom']?></td>
                        <td scope="row"><?= $restaurant['adresse']?></td>
                        <td scope="row"><?= $restaurant['prix']?></td>
                        <td scope="row"><?= $restaurant['note']?></td>
                        <td scope="row"><?= $restaurant['commentaire']?></td>
                        <td scope="row"><?= $restaurant['visite']?></td>
                    <?php endforeach ?>
                    
                </tr>

            </tbody>
        </table>
    </main>
</body>

</html>