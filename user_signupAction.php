<?php

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include "connection.php";
$email=$_REQUEST['email'];
$password=$_REQUEST['pass'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$gender=$_REQUEST['gender'];
$phone=$_REQUEST['phone'];
$adr=urlencode($_REQUEST['address']);
$pin=$_REQUEST['pin'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$country=$_REQUEST['country'];
$query="select email from user where email='$email'";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)){
    echo "Email already exists";
    header("location:user_signup.php?e=1");
}
else {
    $insert = "insert into user values('$email','$fname','$lname','$gender','$password','$phone','$adr','$pin','$city','$state','$country')";
    echo $insert;
    mysqli_query($conn, $insert);
    header("location:user_home.php");
    $fromEmail = "taniaahuja.2389@gmail.com";
    $toEmail = $email;
    $subjectName = "Welcome To PAWsitive";
    $str = "Dear $fname $lname,<br>
Welcome to Pawsitive, your one-stop-shop for all things pet-related. We are thrilled that you have chosen our platform to buy and sell pets, pet products, and seek professional veterinary apoointment services.<br>
 Our team is committed to providing a safe, user-friendly experience for all our members, and we are confident that you will find everything you need to care for your furry friends.
 <br/>
As a registered member of Pawsitive, you will have access to a wide range of pet-related products and services, as well as expert veterinary consultation services to keep your pets healthy and happy.
 Our platform is designed to make it easy for you to connect with sellers and buyers, and we encourage you to explore our extensive catalog of pets, pet products and vet service.</br><br>

Thank you for choosing Pawsitive. We look forward to serving you and your furry companions.

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
    $mail->Username = "taniaahuja.2389@gmail.com";
    $mail->Password = "ydeseklaoqzppxhw";
    $mail->setFrom($fromEmail, 'Pawsitive');
    $mail->addAddress($toEmail, "User");
    $mail->isHTML(true);
    $mail->Subject = $subjectName;
    $mail->Body = $message;

    $mail->send();
}










