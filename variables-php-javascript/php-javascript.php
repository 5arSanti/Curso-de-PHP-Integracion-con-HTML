<?php 
    $usuarios = [
        [
            "id" => 0,
            "username" => "Mr.Michi",
        ],
        [
            "id" => 1,
            "username" => "Santiago",
        ],
        [
            "id" => 2,
            "username" => "Pancho",
        ],
    ];

    $edadPepito = 12;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP a JavaScript</title>
    </head>

    <body>
        <script>
            let users = JSON.parse(' <?= json_encode($usuarios) ?> ');
            console.log(users);

            let edadPepito = <?= $edadPepito; ?>;
            console.log(edadPepito);
        </script>
        <script src="./index.js"></script>
    </body>
</html>