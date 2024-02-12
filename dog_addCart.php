<?php
session_start();
include "connection.php";
$dog=$_REQUEST['d'];

$dselect="select price,photo1,breed from dog where dog_id=$dog";
$dres=mysqli_query($conn,$dselect);
$drow=mysqli_fetch_array($dres);
$price=$drow[0];
$photo=$drow[1];
$breed=$drow[2];
$quantity=1;
$email=$_SESSION['user'];
$select="select * from dog_cart where user_email='$email' and dog_id=$dog";
$res=mysqli_query($conn,$select);
if(mysqli_num_rows($res)){
    echo "exists";
    header("location:user_home.php?q=1");
}
else{
    $insert="insert into dog_cart values(null,'$email',$dog,'$breed','$photo',$price,$quantity)";
    mysqli_query($conn,$insert);
    header("location:dog_cart.php");
}

