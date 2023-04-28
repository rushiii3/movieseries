<?php
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);
$mail->isSMTP();                                           
$mail->Host = 'smtp.gmail.com;';
$mail->Host       = 'smtp.gfg.com;';                   
    $mail->SMTPAuth   = true;                            
    $mail->Username   = 'user@gfg.com';                
    $mail->Password   = 'password';                       
    $mail->SMTPSecure = 'tls';                             
    $mail->Port       = 587; 

?>