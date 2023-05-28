<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

$intro = "Feedback from: " . $_POST["name"];
$email = $_POST["email"];
$name = $_POST["name"];
$feedback = $_POST["message"];

if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jmvjunkshop@gmail.com';
    $mail->Password = 'sgumebjioiojjfhd';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // $mail->setFrom('jmvjunkshop@gmail.com', 'JMV Junkshop');
    $mail->addAddress('jmvjunkshop@gmail.com'); 
    $mail->isHTML(true);

    $mail->Subject = $intro;
    $mail->Body = $_POST["message"];

    $mail->send();

}

if(isset($_POST["submit"])){
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jmvjunkshop@gmail.com';
    $mail->Password = 'sgumebjioiojjfhd';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('jmvjunkshop@gmail.com', 'JMV Junkshop');
    $mail->addAddress($email); 
    $mail->isHTML(true);

    $mail->Subject = 'Thank you for your feedback!';
    $mail->Body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>Hello, <br> <br>
    
        Thank you for leaving feedback on our website! <br> <br>
    
        This auto-reply is to let you know that we have received your email and will get back to you with a human response as soon as possible. We appreciate the review that you sent for the improvement of the company. 
        <br> <br>
        If you have more concerns, please do not hesitate to contact us: <br>
        <a href="">jmvjunkshop@gmail.com </a><br>
        09895452113</p> <br>
    </body>
    </html>';

    $mail->send();

    

    // echo
    // "
    // <script>
    // alert('Check email for the next step of registration.');
    // window.location.href = '../index.php';
    // </script>
    // ";
    // header("Location: index.php");
    echo '<script type="text/javascript">'; 
    echo 'alert("Feedback sent!");'; 
    echo 'window.location.href = "../feedback.php"';
    echo '</script>';
}
?>