<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Sever settinds
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp-mail.outlook.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// $mailheader = "From: ".$name."<" .$email.">\r\n";

$mail->Username = "sendme_332@hotmail.com";
$mail->Password = "Search_76";

$mail->setFrom($email, $name);
$mail->addAddress("sendme_332@hotmail.com", "Dave");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();
echo "email was sent";

// $recipient = "martins.f12@hotmail.com";

// mail($recipient, $subject, $message, $mailheader) or die("Error!");

// echo'

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
//     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
//     <link rel="stylesheet" href="assets/css/style.css">
//     <title>Martins Fadairo</title>
// </head>
//     <div class="container">
//         <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
//         <p class="back text-center">Back to <a href="index.html">Homepage</a>.</p>

//     </div>
//     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
// <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
// <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
// </body>
// </html>


// ';

?>