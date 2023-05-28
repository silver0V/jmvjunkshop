<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['message'];

    $to = "jmvjunkshop@gmail.com";
    $subject = 'Feedback from: ' . $name;
    $headers = "From: " . $email;
    
    mail($to, $subject, $feedback, $headers);

    // $to2 = $email;
    // $subject2 = 'We received your feedback!';
    // $headers2 = "From: " . "jmvjunkshop@gmail.com";
    // $feedback2 = '<!DOCTYPE html>
    // <html lang="en">
    // <head>
    //     <meta charset="UTF-8">
    //     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    //     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    //     <title>Document</title>
    // </head>
    // <body>
    //     Hello, <br> <br>
    
    //     Thank you for leaving feedback on our website! <br> <br>
    
    //     This auto-reply is to let you know that we have received your email and will get back to you with a human response as soon as possible. We appreciate the review that you sent for the improvement of the company. 
    //     <br> <br>
    //     If you have more concerns, please do not hesitate to contact us: <br>
    //     <a href="">jmvjunkshop@gmail.com </a><br>
    //     09895452113 <br>
    // </body>
    // </html>';

    // mail($to2, $subject2, $feedback2, $headers2);


    // header("Location: feedback.php");
}

if (isset($_POST['submit'])){
    $to2 = $email;
    $subject2 = 'We received your feedback!';
    $feedback2 = '<html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>Hello, <br> <br>

    Thank you for leaving feedback on our website! <br> <br>

    This auto-reply is to let you know that we have received your email and will get back to you with a human response as soon as possible. We appreciate the review that you sent for the improvement of the company. 
    <br> <br>
    If you have more concerns, please do not hesitate to contact us: <br>
    <a href="">jmvjunkshop@gmail.com </a><br>
    09895452113 </p><br>
    </body>
    </html>';

    $message = "<p>Hello, <br> <br>";
    $message .= "Thank you for leaving feedback on our website! <br> <br>";
    $message .= "This auto-reply is to let you know that we have received your email and will get back to you with a human response as soon as possible. We appreciate the review that you sent for the improvement of the company. <br> <br>";
    $message .= "If you have more concerns, please do not hesitate to contact us: <br> <br>";
    $message .= "<a href=''>jmvjunkshop@gmail.com </a> <br> <br>";
    $message .= "09895452113</p>";

    $headers2 = "MIME-Version: 1.0" . "\r\n";
    $headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers2[] = 'From: JMV Junkshop <jmvjunkshop@gmail.com>';
    // $headers2 = 'From:jmvjunkshop@gmail.com' . "\r\n";
    mail($to2, $subject2, $feedback2, implode("\r\n", $headers));


    echo '<script type="text/javascript">'; 
    echo 'alert("Feedback sent!");'; 
    echo 'window.location.href = "/feedback.php"';
    echo '</script>';
}

// if (isset($_POST["submit"])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];
//     // $human = intval($_POST['human']);
//     $from = $email; 
    
//     // WARNING: Be sure to change this. This is the address that the email will be sent to
//     $to = 'jmvjunkshop@gmail.com'; 
    
//     $subject = "Feedback from: ".$name." ";
    
//     $body = "From: $name\n E-Mail: $email\n Message:\n $message";

//     // Check if name has been entered
//     if (!$_POST['name']) {
//         $errName = 'Please enter your name';
//     }
    
//     // Check if email has been entered and is valid
//     if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//         $errEmail = 'Please enter a valid email address';
//     }
    
//     //Check if message has been entered
//     if (!$_POST['message']) {
//         $errMessage = 'Please enter your message';
//     }
//     //Check if simple anti-bot test is correct
//     // if ($human !== 5) {
//     //     $errHuman = 'Your anti-spam is incorrect';
//     // }

// // If there are no errors, send the email
// if (!$errName && !$errEmail && !$errMessage) {
// if (mail ($to, $subject, $body, $from)) {
//     $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
// } else {
//     $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
// }
// }
// }

// // an email address that will be in the From field of the email.
// $from = $_POST['email'];

// // an email address that will receive the email with the output of the form
// $sendTo = 'jmvjunkshop@gmail.com';

// // subject of the email
// $subject = $_POST['message'];

// // form field names and their translations.
// // array variable name => Text to appear in the email
// $fields = array('name' => 'Name', 'email' => 'Email', 'message' => 'Message'); 

// // message that will be displayed when everything is OK :)
// $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// // If something goes wrong, we will display this message.
// $errorMessage = 'There was an error while submitting the form. Please try again later';

// /*
//  *  LET'S DO THE SENDING
//  */

// // if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
// error_reporting(E_ALL & ~E_NOTICE);

// try
// {

//     if(count($_POST) == 0) throw new \Exception('Form is empty');
            
//     $emailText = "You have a new message from your contact form\n=============================\n";

//     foreach ($_POST as $key => $value) {
//         // If the field exists in the $fields array, include it in the email 
//         if (isset($fields[$key])) {
//             $emailText .= "$fields[$key]: $value\n";
//         }
//     }

//     // All the necessary headers for the email.
//     $headers = array('Content-Type: text/plain; charset="UTF-8";',
//         'Feedback from: ' . $from,
//         'Reply-To: ' . $_POST['email'],
//         'Return-Path: ' . $from,
//     );
    
//     // Send email
//     mail($sendTo, $subject, $emailText, implode("\n", $headers));

//     $responseArray = array('type' => 'success', 'message' => $okMessage);
// }
// catch (\Exception $e)
// {
//     $responseArray = array('type' => 'danger', 'message' => $errorMessage);
// }


// // if requested by AJAX request return JSON response
// if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
//     $encoded = json_encode($responseArray);

//     header('Content-Type: application/json');

//     echo $encoded;
// }
// // else just display the message
// else {
//     echo $responseArray['message'];
// }


?>