<?php

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// session_start();
// 	require 'class.user.php';
	
// 	$user = new User();


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



    // if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    //     if ( isset( $_REQUEST[ 'submit' ] ) ) {
    //         extract( $_REQUEST );
    //         $Email = $user->checkEmail( $uemail );
    //         if ( $Email ) {
    //             // Registration Success
                
    //                 //header( "location:registration.php" );;
    //                 $mail->send();
    //                 echo 'Message has been sent';
            
    //         } else {
    //             // Registration Failed
    //             header( "location:recuperationpass.php"  );;
    //             $message = "Email incorrect.\\nTry again.";
    //             echo "<script type='text/javascript'>alert('$message');</script>";
                
                
    //         }
    
            
    //     }
    // }
    
    
    $mail->send();
     echo 'Message has been sent';
    


}