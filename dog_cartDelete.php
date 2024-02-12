<?php
include "connection.php";
$id=$_REQUEST['q'];
$delete="delete from dog_cart where id='$id'";
echo $delete;
mysqli_query($conn,$delete);
header("location:dog_cart.php");
