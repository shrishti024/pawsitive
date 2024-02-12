<?php
include 'connection.php';
$name=$_REQUEST['name'];
$des=urlencode($_REQUEST['des']);
    $insert = "insert into breed values('$name','$des')";
    echo $insert;
    mysqli_query($conn, $insert);
    header("location:breed_add.php?e=1");


