<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

//Tạo ra một đối tượng phpmailer
$mail = new PHPMailer(true);

try{
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'minhquanpro2001@gmail.com';// SMTP username
    $mail->Password = 'zqkxqigldvzgxbcd'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('minhquanpro2001@gmail.com', '52.Phạm Minh Quân.1951060948');

    $mail->addReplyTo('minhquanpro2001@gmail.com', '52.Phạm Minh Quân.1951060948');
      
    $mail->addAddress('sohproduction1152018@gmail.com'); // Add a recipient

    $mail->isHTML(true);   // Set email format to HTML
    $tieude = '[Công nghệ Web] Test tài khoản điểm danh';
    $mail->Subject = $tieude;
    $mail->Body = '52.PhamMinhQuan.1951060948';
   
    if($mail->send()){
        echo 'Thư đã được gửi đi';
    }else{
        echo 'Lỗi. Thư chưa gửi được';
    }  




}catch(Exception $e){
    echo "Có lỗi:";
}

?>