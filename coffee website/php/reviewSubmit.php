<?php 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$name = $_POST["name"];
$email = $_POST["email"];
$phone= $_POST["phone"]; 
$message = "În curând vei fi contactat de unul dintre reprezentanții noștri!";

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "you@example.com";
$mail->Password = "password";

$mail->setFrom($email, $name);
$mail->addAddress("dave@example.com", "Dave");
 
$mail->Body = $message;

$mail->send();

header("Location: index.php");


?>