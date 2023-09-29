<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario GET</title>
    </head>

    <body>
        <form action="./server.php" method="get">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name">

            <label for="name">Edad: </label>
            <input type="text" name="age" id="age">

            <button type="submit">Mandar formulario</button>
        </form>
    </body>
</html>