<?php
    include ('./inscription.php');
    

    
?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>formulaire</title>
</head>

<body>
    <main>
        <form action="inscription.php" method="POST">
            <div>
                <label for="nameUser">Name :</label>
                <input type="text" name="nameUser" id="nameUser" placeholder="Your name">
            </div>
            <div>
                <label for="lastnameUser"> Lastname: </label>
                <input type="text" name="lastnameUser" id="lastnameUser" placeholder="Your lastname">
            </div>
            <div>
                <label for="emailUser"> Email: </label>
                <input type="email" name="emailUser" id="emailUser" placeholder="Your email">
            </div>
            <div>
                <label for="passwordUser"> Password: </label>
                <input type="password" name="passwordUser" id="passwordUser" placeholder="Your password">
            </div>

            <div>
                <button type="submit">login</button>
            </div>
        </form>
    </main>
</body>

</html>