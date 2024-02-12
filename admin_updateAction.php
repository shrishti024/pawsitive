<?php
include "connection.php";
$username=$_REQUEST['username'];
$fname=$_REQUEST['fname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$type=$_REQUEST['type'];
$update="update admin set fullname='$fname',email='$email',phoneno='$phone',admintype='$type' where username='$username'" ;
//echo $update;
mysqli_query($conn,$update);
header("location:admin_view.php");
