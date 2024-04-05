<?php

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $email = $_POST['uemail'];

$mail = new PHPMailer(true);


    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'parkingid.02@gmail.com';                     
    $mail->Password   = 'toej etlb ziga tveq';                               
    $mail->SMTPSecure = 'ssl';            
    $mail->Port       = 465;                                    
    $mail->setFrom('parkingid.02@gmail.com');
    $mail->addAddress($email);    
    $mail->isHTML(true);      
    $key = mt_rand(9999,99999);                       
    $mail->Subject = 'your code is : ' .$key;
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    

    $mail->send();
    echo 'Message has been sent';


}