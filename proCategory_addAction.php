<?php
include "connection.php";
$cat = $_REQUEST['category'];
$des = urlencode($_REQUEST['desc']);
$insert = "insert into category values('$cat','$des')";
echo $insert;
mysqli_query($conn, $insert);
header("location:proCategory_add.php?e=1");


