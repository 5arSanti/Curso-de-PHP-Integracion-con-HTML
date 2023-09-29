<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envio de imagenes</title>
    </head>

    <body>
        <form action="./server.php" method="post" enctype="multipart/form-data">

            <!-- Input Simple -->
            <!-- <label for="name">Name:</label>
            <input type="text" name="name" id="name"> -->


            <!-- Arreglo -->
            <!-- <label>Personas:</label>
            <input type="text" name="people[]">
            <input type="text" name="people[]">
            <input type="text" name="people[]"> -->


            <!-- Arreglos asociativos -->
            <!-- <label>Usuario</label>
            <label for="name">Nombre</label>
            <input type="text" name="user[name]" id="name">

            <label for="email">Email</label>
            <input type="email" name="user[email]" id="email">
            
            <label for="password">Password</label>
            <input type="password" name="user[password]" id="password">

            <button type="submit">Mandar Formulario</button> -->


            <!-- Checkbox -->
            <!-- <input type="checkbox" name="list1" value="Este valor fue clickeado">
            <input type="checkbox" name="list2">
            <input type="checkbox" name="list3">

            <button type="submit">Enviar formulario</button> -->


            <!-- Readius -->
            <!-- <label for="mexico">México</label>
            <input type="radio" name="pais" value="Mexico" id="mexico">

            <label for="colombia">Colombia</label>
            <input type="radio" name="pais" value="Colombia" id="colombia">
            
            <label for="peru">Peru</label>
            <input type="radio" name="pais" value="Peru" id="peru">

            <button type="submit">Enviar formulario</button> -->



            <!-- Multiples archivos -->
            <label for="images">Carga tus imagenes</label>
            <input type="file" multiple name="images[]" id="images">

            <button type="submit">Enviar formulario</button> 
        </form>
    </body>
</html>