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