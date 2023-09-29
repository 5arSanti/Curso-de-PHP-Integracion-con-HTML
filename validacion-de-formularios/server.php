<?php 

    // $name = $_POST["name"];
    // if(isset($name) && !empty($name)){
    //     echo "Hola " . $name;
    // }
    // else{
    //     echo "No mandaste nada";
    // }

    if(isset($_POST["form"])){
        echo "Todo el formulario fue mandado";
    } else{
        echo "No se mando ningun formulario";
    }
?>