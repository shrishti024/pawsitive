<?php
include "connection.php";
$fname=$_REQUEST['fname'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$phone=$_REQUEST['phone'];
$addr=urlencode($_REQUEST['address']);
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$status=$_REQUEST['status'];

$query="select * from seller where email='$email'";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)){
    echo "User already exists";
    header("location:seller_signup.php?e=1");
}
else {
    $insert = "insert into seller values('$fname','$email','$pass','$addr','$city','$state','$phone','$status')";
    echo $insert;
    mysqli_query($conn, $insert);
    header("location:seller_signup.php?e=2");
}

