<?php
include "connection.php";
$email = $_REQUEST['email'];
$oldpass = $_REQUEST['pass'];
$newpass = $_REQUEST['pass1'];
$conpass = $_REQUEST['pass2'];
$select = "select password from seller where email='$email' and password='$oldpass'";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res)) {
    if ($newpass == $conpass) {
        $update = "update seller set password='$newpass' where email='$email'";
        header('location:seller_changePassword.php?e=1');
        echo "updated";
        mysqli_query($conn, $update);
        if ($newpass == $oldpass) {
            echo "Not Updated";
            header('location:seller_changePassword.php?e=2');
        }
    }
    else {
        echo "New and confirm password does not match";
        header('location:seller_changePassword.php?e=3');
    }
}
else {
    echo "Old InValid";
    header('location:seller_changePassword.php?e=4');
}
