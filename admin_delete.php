<?php
include "connection.php";
$user=$_REQUEST['q'];
echo $user;
$delete="delete from admin where username='$user'";
echo $delete;
mysqli_query($conn,$delete);
header("location:admin_view.php");