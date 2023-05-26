<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['message'];

    $mailTo = "jmvjunkshop@gmail.com";
    $headers = "Feedback from: " . $name;
    
    mail($mailTo, $name, $feedback, $headers);

    header("Location: feedback.php");
}

?>