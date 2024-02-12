<?php
include 'connection.php';
$oid=$_REQUEST['q'];
$action=$_REQUEST['action'];
if($action=='ship') {
    $up = "update dog_orders set status='shipped' where orderid='$oid'";
    mysqli_query($conn, $up);
    header('location:dog_orderDetails.php?e=1&q='.$oid);
}

else{
    $up = "update dog_orders set status='delivered' where orderid='$oid' and status='shipped'";
    mysqli_query($conn, $up);
    header('location:dog_orderDetails.php?e=1&q='.$oid);
}