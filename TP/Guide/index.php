<?php

require "Connexion.php";
require "./Classes/MaTable.php";

$maTable = new MaTable('restaurant');



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <main>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Noms</th>
                    <th scope="col">Adresses</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Commentaires</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Visites</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <?= $maTable->getCommentaire()?>
                   
                  
                </tr>
               
            </tbody>
        </table>
    </main>
</body>

</html>