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

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jmvjunkshop@gmail.com';
    $mail->Password = 'tnqsdimutgcbbtto';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // $mail->From='vcarpool47@gmail.com';
    // $mail->FromName='Carpool App';
    $mail->setFrom('jmvjunkshop@gmail.com', 'JMV Junkshop');

    $mail->addAddress($email, $name);

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
    echo 'window.location.href = "feedback.php";';
    echo '</script>';

}
?>