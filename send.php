<?php
error_reporting(0);
include  './part/header.php';

require 'vendor/autoload.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader

require 'vendor\phpmailer/src/Exception.php';
require 'vendor\phpmailer/src/PHPMailer.php';
require 'vendor\phpmailer/src/SMTP.php';




if  (!empty($_POST["send"])) {
    $firstName = filter_var($_POST['firstName']) ;
    $Phon =   filter_var($_POST['Phon'], FILTER_SANITIZE_NUMBER_INT) ;
    $Working = filter_var( $_POST['Working'])  ;
    $Salary =  filter_var( $_POST['Salary'],FILTER_SANITIZE_NUMBER_INT);
    $Support =  filter_var($_POST['Support'],FILTER_SANITIZE_NUMBER_INT);
    $Installment = filter_var($_POST['Installment'],FILTER_SANITIZE_NUMBER_INT);
    $Idd         = filter_var($_POST['Idd'],FILTER_SANITIZE_NUMBER_INT);
    $toEmail ="info.tamweely@gmail.com";

    $mailHeaders = "Name: "   . $firstName . 
   "\r\n Email: " . $Phon . 
   "\r\n Email: " . $Working . 
   "\r\n Email: " . $Salary . 
   "\r\n Email: " . $Installment . 
   "\r\n Email: " . $Support . 
   "\r\n Email: " . $Idd . "\r\n";
   if (mail($toEmail, $firstName ,$mailHeaders)){
    $message = "Your infromation is Received successfully.";

}
}
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.elasticemail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info.tamweely@gmail.com';                     //SMTP username
    $mail->Password   = 'D3133090F58BE294984456CAA82658DC39D8';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info.tamweely@gmail.com', 'BMT');
    $mail->addAddress('info.tamweely@gmail.com', 'infotamweely');     //Add a recipient
   // $mail->addAddress('info.tamweely@gmail.com');               //Name is optional
    //$mail->addReplyTo('info.tamweely@gmail.com', 'Information');
   // $mail->addCC('tamweelysa2@gmail.com');
   

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'new contact holol';
    $mail->Body    = 'test if phpmailr send';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'تم إرسال الرسالة بنجاح';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
