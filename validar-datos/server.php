<?php 
    echo "<pre>";
        $isFloat = filter_var("9.9", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
        var_dump($isFloat);

        $isInt = filter_var("45", FILTER_VALIDATE_INT);
        var_dump($isInt);

        $isIp = filter_var("127.0.0.1", FILTER_VALIDATE_IP);
        var_dump($isIp);

        $isURL = filter_var("https://platzi.com", FILTER_VALIDATE_URL);
        var_dump($isURL);

        $isEmail = filter_var("1231@prueba.com", FILTER_VALIDATE_EMAIL);
        var_dump($isEmail);
    echo "</pre>";

?>