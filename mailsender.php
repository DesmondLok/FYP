<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

$name = $_POST["Name"]; 
$email = $_POST["Email"];
$subject = "User Support: ".$_POST["Subject"];
$body = "<h2>User Support</h2>Name: " .$_POST["Name"].
        "<br>Email: " .$_POST["Email"].
        "<br><br>Message: <br>".$_POST["Content"]."";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'in-v3.mailjet.com';                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '45ef8617dc548b57ee95b5cdbc17eeaf';     //SMTP username
    $mail->Password   = '8a66abbda8960f7317af9dfe9ddda734';     //SMTP password
    $mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('desmondlok62@gmail.com');
    $mail->addAddress('75490@siswa.unimas.my');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = $body;

    $mail->send();
    echo 'Message has been sent';
    header("Location: ../forum.php");
} catch (Exception $e) {
    header("Location: ../forum.php?error=".$mail->ErrorInfo.".");
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}