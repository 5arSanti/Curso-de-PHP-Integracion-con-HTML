<?php 
    $tablaDel9 = [];

    for ($i=1; $i <= 10; $i++) {
        $resultado = 9 * $i;
        $texto = "9 * $i = $resultado";
        array_push($tablaDel9, $texto);
    }
?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buenas Practicas</title>
    </head>

    <body>
        <ul>
            <?php foreach ($tablaDel9 as $value): ?>
                <li> <?= $value ?> </li>
            <?php endforeach ?>
        </ul>    
    </body>
</html>