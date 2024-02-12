<?php
include "connection.php";
$id=$_REQUEST['q'];
echo $id;
$delete="delete from breed where name='$id'";
echo $delete;
mysqli_query($conn,$delete);
header("location:breed_view.php?e=1");

