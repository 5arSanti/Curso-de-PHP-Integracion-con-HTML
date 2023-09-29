<?php 
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";

    $baseName = $_FILES["image"]["name"];
    $image = $_FILES["image"]["tmp_name"];

    $routeToUpload = "images/$baseName";

    move_uploaded_file($image, $routeToUpload);
    
    echo "$baseName";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <img src=" <?= $routeToUpload ?> " alt="<?= $baseName ?>">
    </body>
</html>
