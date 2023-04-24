<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$intro = "Feedback from: " . $_POST["name"];

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'villasangelgrace@gmail.com';
    $mail->Password = 'udnbzbxkepipniis';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST["email"]);

    $mail->addAddress('jmvjunkshop@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = $intro;
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = feedback.php
    </script>
    ";
    header("Location: index.html");
}

// // the message
// $msg = $_GET ['message'];
// $email = $_GET ['email'];

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// // send email
// mail($email,"My subject",$msg);
// ?>