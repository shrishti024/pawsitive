<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include "connection.php";
$email=$_REQUEST['q'];
$action=$_REQUEST['action'];
$pass='';
if($action=='accepted'){
    for($i=0;$i<=5;$i++){
        $pass=$pass.rand(0,9);
    }
    echo $pass;
    $update="update vet set status='accepted',password='$pass' where email='$email'" ;
//echo $update;
    mysqli_query($conn,$update);
    header("location:vet_view.php");
    $fromEmail = "pawsitive.pttt@gmail.com";
    $toEmail = $email;
    $subjectName = "Login Credentials";
    $str = "Hello, <br/>
You have been registered on our website. <br/>
You can login with you regustered email id and auto generated password i.e.
<strong>$pass</strong>";
    $message = $str;

    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->Username = "pawsitive.pttt@gmail.com";
    $mail->Password = "mtwkxzxdwwtlygbi";
    $mail->setFrom($fromEmail, 'Pawsitive');
    $mail->addAddress($toEmail, "Vet");
    $mail->isHTML(true);
    $mail->Subject = $subjectName;
    $mail->Body = $message;

    $mail->send();
}
else{
    $update="update vet set status='rejected' where email='$email'" ;
    mysqli_query($conn,$update);
    header("location:vet_view.php");
}


