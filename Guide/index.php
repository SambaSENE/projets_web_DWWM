

<!DOCTYPE html>
<html lang="fr-fr">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>Document</title>
    </head>
    
    <body>
        <?php include "./View/includes/header.php"; ?>
        <main class="container flex">

        <?php
        require "./Model/MaTable.php";

        $maTable = new MaTable('restaurants');

        if (isset($_POST['nom']) &&  isset($_POST['adresse']) && isset($_POST['prix']) && isset($_POST['commentaire']) && isset($_POST['note']) && isset($_POST['visite'])) {

            $maTable->insertElement($_POST["nom"], $_POST["adresse"], floatval($_POST['prix']), $_POST["commentaire"], intval($_POST["note"]), $_POST["visite"]);
        }

        if (isset($_POST['delete'])) {
            $maTable->deleteElement($_POST['id']);
        } else {

            echo "Soumission de formulaire non autorisée.";
        }
        include "./View/includes/cards.php";
        include "./View/includes/add_form.php";
        ?>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>