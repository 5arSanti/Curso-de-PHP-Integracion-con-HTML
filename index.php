<?php 
    require("mail.php");

    function validate($name, $email, $subject, $message, $form){
        return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
    }

    $status = "";

    if (isset($_POST["form"])) {
        if(validate(...$_POST)) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];

            $body = "Hi $name!,<br> <br>I received your message:: <br><br>$message. <br><br> Thank you for your contact, if you want more information about my services you can contact me directly at: <br><br>santiari05@htomail.com <br>05illarsanti05@gmail.com <br>+57 3144013931 <br><a href='https://5arsanti.github.io/' target='_blank' rel='noreferrer noopener'>Professional Portfolio</a>";
            
            //Mandar el correo
            sendMail($name, $email, $subject, $body, true);

            $status = "success";
        } 
        else {
            $status = "danger";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Contact Form</title>
        <link rel="stylesheet" href="./styles.css" type="text/css">
    </head>

    <body>
        <div class="container">

            <?php if($status === "danger"): ?>
                <div class="problem-message-container danger">
                    <p>There's been a problem <br> Please fill out all the fields and try again.</p>
                </div>
            <?php elseif ($status === "success"): ?>
                <div class="ok-message-container succes">
                    <p>You received an email with more information!</p>
                </div>
            <?php endif; ?>
            

            <h1>PHP Contact Form</h1>

            <div class="form-container">
                <form action="./" method="post">
                    <h2>Contact Me!</h2>
    
                    <div class="input-container">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>
    
                    <div class="input-container">
                        <label for="email">Email: </label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
    
                    <div class="input-container">
                        <label for="subject">Subject: </label>
                        <input type="text" name="subject" id="subject" placeholder="Subject">
                    </div>
    
                    <div class="input-container">
                        <label for="message">Message: </label>
                        <textarea  name="message" id="message" placeholder="Message"></textarea>
                    </div>
    
                    <div class="button-container">
                        <button type="submit" name="form">Contact Me!</button>
                    </div>
    
                    <div class="contact-me-container">
                        <a href="https://5arsanti.github.io/" target="_blank" rel="noreferrer noopener">Portfolio</a>
                        <p>santiari05@hotmail.com</p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>