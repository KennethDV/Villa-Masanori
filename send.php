<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';
if(isset($_POST["send"])){

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = 'smtp.hostinger.com';
    $mail->Username = 'kenneth@villamasanori.fun';
    $mail->Password = 'Kenneth@123';

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('kenneth@villamasanori.fun');

    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    
    $mail->Subject = $_POST['subject'];
    $mail->Body = "Thank you" . $_POST["name"] . "We have received your feedback. We'll get back to you soon.";

    $mail->send();

    echo '<script>', 'alert("Sent Successfully");',
    'window.location.replace("https://villamasanori.fun");',
    
    '</script>';

}
?>