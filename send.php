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
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'buenaroa.connect@gmail.com';
    $mail->Password = 'clkbqhdlrpcnjzsw'; //Email Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    //SETTING Email
    $mail->setFrom('buenaroa.connect@gmail.com', 'Buenaroa'); //Senders Email
    $mail->addAddress($sender); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "Good Day!";
    $mail->Body = "Thank you for contacting us! We will get back to you shortly. Have a wonderful day " . $name;
    $mail->send();

    header('Location: index.php');
}

?>