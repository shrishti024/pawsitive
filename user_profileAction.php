<?php
include "connection.php";
$email=$_REQUEST['email'];
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$gender=$_REQUEST['gender'];
$phone=$_REQUEST['phone'];
$address=urlencode($_REQUEST['addr']);
$pin=$_REQUEST['pin'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$country=$_REQUEST['country'];
$update="update user set fname='$fname',lname='$lname',gender='$gender',phone='$phone',address='$address',pincode='$pin',city='$city',state='$state',country='$country' where email='$email'" ;
//echo $update;
if(mysqli_query($conn,$update)) {
     echo 'success';
    header("location:user_profile.php?e=1");
}
else{
    echo 'failed';
    header("location:user_profile.php?e=2");
}
