<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
// $html='Success! Dear ' . $Name .' your appointemnt has been successfully registered on Date '. $Doapp . ' kindly visit on time that date for your health check-up . Thank You...';

// echo smtp_mailer('websitemastercoding@gmail.com','Appointment Booked',$html);
//Create an instance; passing `true` enables exceptions
function smtp_mailer($to,$subject,$msg){
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 5;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->isHTML(true);                                   //Set email format to HTML
    $mail->CharSet = 'UTF-8';
    $mail->Username   = 'durgaelectricstorehodal@gmail.com';                     //SMTP username
    $mail->Password   = 'RAMESH925@';                               //SMTP password
    $mail->setFrom('durgaelectricstorehodal@gmail.com', 'Mailer');
    $mail->addCC('kunalgarg925@gmail.com');
    $mail->Subject = $subject;
    $mail->Body    = $msg;
    $mail->addAddress($to);     //Add a recipient
    $mail->SMTPOptions=array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self_sign'=>false
    ));
    if(!$mail->send()){
        echo $mail->ErrorInfo;
    }
    else{
        return 'sent';
    }

}
