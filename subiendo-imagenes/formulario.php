<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envio de imagenes</title>
    </head>

    <body>
        <form action="./server.php" method="post" enctype="multipart/form-data">
            <label for="name">Nombre: </label>
            <input type="text" name="name" id="name">

            <label for="image">Imagen: </label>
            <input type="file" name="image" id="image">

            <button type="submit">Mandar formulario</button>
        </form>
    </body>
</html>