<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from pro_cart where id='$id'";
echo $delete;
mysqli_query($conn,$delete);
header("location:product_cart.php");

