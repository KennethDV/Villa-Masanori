<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
if(isset($_POST['send'])){

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'dentalclique2013@gmail.com';
    $mail->Password = 'dsjxaabrduxozatb';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('dentalclique2013@gmail.com');

    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    $mail->send();

}
?>