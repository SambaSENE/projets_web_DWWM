<?php

echo phpinfo();

            function htmlList(string $titleListe, array $arrayList)
            {
                if (empty($arrayList)) {
                    echo   '<h3>' . $titleListe . '</h3>';
                   
                    return '<p>Aucun résulat</p>';
                }

           


                    sort($arrayList);
                    $name = '';
                    foreach ($arrayList as  $value) {
                        $name .= "<li>{$value}</li>";
                    }
                    
                    $title  = '<h3>'.$titleListe.'</h3>';
                return $title . $name;
            }

            $name = ['Stefan', 'Nathan', 'Guillaume', 'toto', 'macron'];
            
            ?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <main>

        <ul>
        
            
                <?= htmlList('Liste des personnes', $name) ?>
            
        </ul>
    </main>
</body>

</html>