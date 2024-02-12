<?php
include "connection.php";
$username=$_REQUEST['username'];
$password=$_REQUEST['pass'];
$select="select * from admin where username='$username' and password='$password'";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    echo "Log In";
    session_start();
    $_SESSION['admin']=$username;
    header("location:admin_home.php");
}
else{
    echo "error message";
    header("location:admin_login.php?e=1");

}