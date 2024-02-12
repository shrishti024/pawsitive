<?php
include "connection.php";
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];
$fname=$_REQUEST['fname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$type=$_REQUEST['type'];

$query="select username from admin where username='$username'";
$res=mysqli_query($conn,$query);
    if(mysqli_num_rows($res)){
        echo "Username already exists";
        header("location:admin_add.php?e=1");
    }
    else {
        $insert = "insert into admin values('$username','$password','$fname','$email','$phone','$type')";
        echo $insert;
        mysqli_query($conn, $insert);
        header("location:admin_add.php?e=2");
    }
