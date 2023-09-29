<?php 
    $seHabloDeBruno = false;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Condicionales PHP</title>
    </head>

    <body>
        <h1>ESTO NO SE DEBE HACER </h1>
        <?php 
            if($seHabloDeBruno){
                echo "<h1>Esta condicional es verdadera (●'◡'●)</h1>";
            }
            else {
                echo "<h1>☆*: .｡. o(≧▽≦)o .｡.:*☆</h1>";
            }
        ?>

        <!-- ESTO ES ACEPTABLE -->
        <h1>ESTO ES ACEPTABLE </h1>

        <?php if ($seHabloDeBruno) { ?>
            <h1>Esta condicional es verdadera (●'◡'●)</h1>
        <?php } else { ?>
            <h1>☆*: .｡. o(≧▽≦)o .｡.:*☆</h1>
        <?php } ?>


        <!-- ESTO SI DEBERIA HACERLO -->
        <h1>ESTO SI DEBERIA HACERLO </h1>
        
        <?php if ($seHabloDeBruno): ?>
            <h1>Esta condicional es verdadera (●'◡'●)</h1>
        <?php  else: ?>
            <h1>☆*: .｡. o(≧▽≦)o .｡.:*☆</h1>
        <?php endif; ?>
    </body>
</html>