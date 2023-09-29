<?php 
    use PHPMailer\PHPMailer\PHPMailer;


    require("vendor/autoload.php");

    function sendMail($name, $email, $subject, $body, $html = false){
        
        //Configuracion inicial del servidor de correos

        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.gmail.com';
        $phpmailer->SMTPAuth = true;
        $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $phpmailer->Port = 465;
        $phpmailer->Username = '05illarsanti@gmail.com';
        $phpmailer->Password = 'agdj qire ostk vhln';

        // Añadiendo destinatarios
        $phpmailer->setFrom('05illarsanti@gmail.com', 'Saniago Arias');
        $phpmailer->addAddress($email, $name);

        //Contenido del email
        $phpmailer->isHTML($html);
            //Set mail format to HTML
        $phpmailer->Subject = $subject;
        $phpmailer->Body = $body;

        $phpmailer->send();
    }
?>