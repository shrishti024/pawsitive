<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

include "connection.php";
$email = $_REQUEST['email'];


$query = "select email from admin where email='$email'";
$res = mysqli_query($conn, $query);
if (mysqli_num_rows($res)) {
    $pass = '';
    for ($i = 0; $i <= 5; $i++) {
        $pass = $pass . rand(0, 9);
    }
    $update = "update admin set password='$pass' where email='$email'";
    mysqli_query($conn, $update);
    header("location:admin_login.php");

    $fromEmail = "taniaahuja.2389@gmail.com";
    $toEmail = $email;
    $subjectName = "Login Credentials";
    $str = "Hello, <br/>
You have been registered on our website. <br/>
You can login with your registered email id and System Generated Password i.e.
<strong>$pass</strong>.</br>
You can set your password in the change password menu tab by filling in the System Generated Password as your old password.";
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
    $mail->addAddress($toEmail, "Admin");
    $mail->isHTML(true);
    $mail->Subject = $subjectName;
    $mail->Body = $message;

    $mail->send();
} else {
    echo "email id is not registered!!";
    header("location:admin_forgetPassword.php?e=1");

}


//echo $update;

