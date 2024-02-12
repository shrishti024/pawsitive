<?php
include "connection.php";
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$select="select * from user where email='$email' and password='$password'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    echo " login ";
    session_start();
    $_SESSION['user']=$email;
    header( "location:user_home.php");
}
else{
    echo "error";
    header("location:user_login.php?e=1");
}


