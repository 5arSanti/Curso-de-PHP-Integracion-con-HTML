<?php 
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";

    $baseName = $_FILES["image"]["name"];
    echo "$baseName";
?>