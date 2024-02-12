<?php
include "connection.php";
$email=$_REQUEST['email'];
$fname=$_REQUEST['fname'];
$phone=$_REQUEST['phone'];
$address=urlencode($_REQUEST['addr']);
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$update="update seller set name='$fname',phone='$phone',address='$address',city='$city',state='$state' where email='$email'" ;
//echo $update;
if(mysqli_query($conn,$update)) {
    echo 'success';
    header("location:seller_profile.php?e=1");
}
else{
    echo 'failed';
    header("location:seller_profile.php?e=2");
}
