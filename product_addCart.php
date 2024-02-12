<?php

session_start();
include "connection.php";
$pro = $_REQUEST['p'];
$pselect = "select price,photo1,pro_name from product where pro_id=$pro";
$pres = mysqli_query($conn, $pselect);
$prow = mysqli_fetch_array($pres);
$price = $prow[0];
$photo = $prow[1];
$name = $prow[2];
$quantity = 1;
$email = $_SESSION['user'];
$select = "select * from pro_cart where user_email='$email' and pro_id='$pro'";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res)) {
    echo "exists";
    header("location:user_home.php?q=2");
} else {

    $insert = "insert into pro_cart values(null,'$email',$pro,'$name','$photo',$price,$quantity)";
    mysqli_query($conn, $insert);
    header("location:product_cart.php");
}

