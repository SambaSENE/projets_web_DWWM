<?php

?>

<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <main>
        <form action="inscription.php" method="POST">
            <div>
                <label for="name">Nom : </label>
                <input type="text" name="name" id="name" placeholder="Votre nom">
            </div>
            <div>
                <label for="lastName">Prénom : </label>
                <input type="text" name="lastName" id="lastName" placeholder="Votre prénom">
            </div>
            <div>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" placeholder="Votre email">
            </div>
            <div>
                <label for="password">Mot de passe: </label>
                <input type="password" name="password" id="password" placeholder="Votre mot de passe">
            </div>
            <div>
                <button type="submit">Valider</button>
            </div>
        </form>
    </main>
</body>

</html>