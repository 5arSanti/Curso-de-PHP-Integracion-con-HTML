<?php 
    $usuarios = ["Mr.Michi", "Santiago", "Juan Damian"];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CICLOS PHP</title>
    </head>

    <body>
        <ul>
            <!-- FOR -->
            <?php for ($i=0; $i < 10; $i++): ?>
                <li> <?= $i ?> </li>
            <?php endfor; ?>
            
            <!-- While -->
            <?php while (false): ?>
                <li>Cualquier cosa</li>
            <?php endwhile;?>
            

            <!-- FOREACH -->
            <h1>Lista de usuarios</h1>
            <ul>
                <?php foreach($usuarios as $user): ?>
                    <li> <?= $user ?> </li>
                <?php endforeach; ?>
            </ul>
        </ul>
    </body>
</html>