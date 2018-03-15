<?php
//Import the PHPMailer class into the global namespace
require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

if (array_key_exists('to', $_POST)) {
    $err = false;
    $msg = '';
    $email = '';
  
    //Apply some basic validation and filtering to the name
    if (array_key_exists('name', $_POST)) {
        //Limit length and strip HTML tags
        $name = substr(strip_tags($_POST['name']), 0, 255);
    } else {
        $name = '';
    }
  
    //Make sure the address they provided is valid before trying to use it
    if (array_key_exists('email', $_POST) and PHPMailer::validateAddress($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $msg .= "Error: invalid email address provided";
        $err = true;
    }
    if (!$err) {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->Port = 2500;
        $mail->CharSet = 'utf-8';
        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('form@ura.design', (empty($name) ? 'Contact form' : $name));
        $mail->addAddress('anxhelo1995@gmail.com');
        $mail->addReplyTo($email, $name);
        $mail->Subject = 'Contact form: Ura Design';
        $mail->Body = "Contact form submission\n\n" . $message;
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg .= "Message sent!";
        }
    }
} ?>
