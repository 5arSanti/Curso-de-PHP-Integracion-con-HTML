<?php 
    echo "<pre>";
        var_dump($_POST);
    echo "</pre>";

    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    
    $htmlentities = htmlentities($name);
    $addslashes = addslashes($username);
    $onlyWords = preg_replace("/\d/", "", $username); 
    $onlyNumbers = preg_replace("/\D/", "", $username); 

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Datos de usuario</title>
    </head>
    <body>
        <p>name: <?= $htmlentities ?></p>
        <p>Username: <?= $username ?></p>
        <p>Username: <?= $onlyWords ?></p>
        <p>Username: <?= $onlyNumbers ?></p>
        <p>email: <?= $email ?></p>
        <p>age: <?= $age ?></p>

    </body>
</html>