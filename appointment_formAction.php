<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:user_login.php");
    exit();
}

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$vemail = $_REQUEST['q'];

$select = "SELECT email FROM vet WHERE email = '$vemail'";
echo $select . "<br/>";
$res = mysqli_query($conn, $select);

if (mysqli_num_rows($res) == 0) {
    header('location:appointment_form.php?e=2');
    exit();
}
$vselect="SELECT name FROM vet WHERE email = '$vemail'";
$vres=mysqli_query($conn,$vselect);
$vrow=mysqli_fetch_array($vres);
$vname=$vrow[0];
echo $vname;
$timeslot = $_REQUEST['timeslot'];
$email = $_SESSION['user'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$date = $_REQUEST['date'];
$msg = urlencode($_REQUEST['message']);
$status = $_REQUEST['status'];
$dselect = 'select * from appointment where user_email="' . $email . '" and app_date="' . $date . '"';
//echo $dselect;
$dres = mysqli_query($conn, $dselect);
if (mysqli_num_rows($dres)) {
    echo 'already exists';
   // header('location:appointment_form.php?e=1&p=' . $vemail);
    header('location:user_vetView.php?e=1');

} else {
    $insert = "INSERT INTO appointment(app_id,user_email,vet_email,vet_name,dog_name,phone,app_date,symptoms,time_slot,status)
VALUES (null, '$email', '$vemail', '$vname','$name','$phone', '$date', '$msg', '$timeslot','$status')";
    echo $insert;
    mysqli_query($conn, $insert);
    header('location:user_vetView.php?e=2');
}
exit();
?>
