<?php
include "connection.php";
$id=$_REQUEST['q'];
echo $id;
$delete="delete from dog where dog_id='$id'";
echo $delete;
mysqli_query($conn,$delete);
header("location:dog_view.php?e=1");
