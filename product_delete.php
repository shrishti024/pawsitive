<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from product where id='$id'";
echo $delete;
mysqli_query($conn,$delete);
header("location:product_view.php?e=1");


