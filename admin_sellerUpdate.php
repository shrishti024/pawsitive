<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include "connection.php";
$email=$_REQUEST['q'];
$action=$_REQUEST['action'];
if($action=='accepted'){
$update="update seller set status='accepted' where email='$email'" ;
//echo $update;
mysqli_query($conn,$update);
header("location:seller_view.php");
    $fromEmail = "pawsitive.pttt@gmail.com";
    $toEmail = $email;
    $subjectName = "Seller request on PAWsitive";
    $str = "Hello, <br/>
We are delighted to inform you that your request to become a seller on Pawsitive has been accepted. Welcome to our community of pet lovers and entrepreneurs! <br/>
As a seller on our platform, you will have the opportunity to showcase your pet-related products and connect with buyers who are looking for the perfect addition to their furry family. Our user-friendly platform is designed to help you easily list your products, manage your sales, and interact with potential buyers.</br><br>

Thank you for choosing Pawsitive as your partner in pet-related sales. We look forward to working with you and supporting your entrepreneurial journey.

Best regards,
The Pawsitive Team";
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
    $mail->addAddress($toEmail, "Seller");
    $mail->isHTML(true);
    $mail->Subject = $subjectName;
    $mail->Body = $message;

    $mail->send();
}
else{
    $update="update seller set status='rejected' where email='$email'" ;
    mysqli_query($conn,$update);
    header("location:seller_view.php");
}









