<?php
session_start();
include "connection.php";
$fname=$_REQUEST['fname'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$city=$_REQUEST['city'];
$zip=$_REQUEST['zip'];
$state=$_REQUEST['state'];
$payment=$_REQUEST['payment'];
$useremail=$_SESSION['user'];
$select="select sum(price), pro_id  from pro_cart  where user_email='".$_SESSION['user']."'";
echo $select;
$res=mysqli_query($conn,$select);
$row=mysqli_fetch_array($res);
$gt=$row[0];
$pid=$row[1];

$up="update product set status='sold' where pro_id=$pid";
mysqli_query($conn,$up);

$sSelect="select seller_email from product where pro_id=$pid";
$sres=mysqli_query($conn,$sSelect);
$srow=mysqli_fetch_array($sres);
$seller=$srow[0];


$insert="insert into product_orders(`orderid`, `user_email`, `name`, `phone`, `address`, `city`, `zip`, `state`,
                       `payment_type`, `grand_total`, `status`, `selleremail`)
values(null,'$useremail','$fname','$phone','$address','$city','$zip','$state','$payment',$gt,'placed','$seller')";
mysqli_query($conn,$insert);


$getmaxid="select max(orderid) from product_orders";
$gm_res=mysqli_query($conn,$getmaxid);
$gm_row=mysqli_fetch_array($gm_res);
$maxid=$gm_row[0];


$cart="select * from pro_cart where user_email='$useremail'";
$cart_res=mysqli_query($conn,$cart);
while ($cart_row=mysqli_fetch_array($cart_res)){

    $insert_od="insert into product_orderdetails values(null,$maxid,".$cart_row['pro_id'].",".$cart_row['quantity'].")";
    mysqli_query($conn,$insert_od);
}

$delete="delete from pro_cart where user_email='$useremail'";
mysqli_query($conn,$delete);
header("location:thank-you.php");