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