<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    //POST
    $sender = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //PHP Mailer Declaration
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'kenneth@villamasanori.fun';
    $mail->Password = 'Kenneth@123'; //Email Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    //SETTING Email
    $mail->setFrom('kenneth@villamasanori.fun', 'Dental Clique'); //Senders Email
    $mail->addAddress($sender); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "Good Day!";
    $mail->Body = "Thank you" . $name . ", We have received your email. Please wait for our response.";
    $mail->send();

    header('Location: index.php');
}

?>