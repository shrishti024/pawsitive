<?php
include "connection.php";
$email=$_REQUEST['email'];
$password=$_REQUEST['pass'];
$select="select * from seller where email='$email' and password='$password'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    $row=mysqli_fetch_array($res);
    $status=$row['status'];
    if($status=="accepted"){
    echo "Log In";
    session_start();
    $_SESSION['seller']=$email;
    header("location:seller_home.php");
    }
    else{
       echo 'not accepted';
        header("location:seller_login.php?e=1");
    }
}
else{
    echo "error message";
    header("location:seller_login.php?e=2");

}
