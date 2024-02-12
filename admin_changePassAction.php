<?php
include "connection.php";
$username = $_REQUEST['user'];
$oldpass = $_REQUEST['pass'];
$newpass = $_REQUEST['pass1'];
$conpass = $_REQUEST['pass2'];
$select = "select password from admin where username='$username' and password='$oldpass'";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res)) {
    if ($newpass == $conpass) {
        $update = "update admin set password='$newpass' where username='$username'";
        header('location:admin_changePassword.php?e=1');
        echo "updated";
        mysqli_query($conn, $update);
        if ($newpass == $oldpass) {
            echo "Not Updated";
            header('location:admin_changePassword.php?e=2');
        }
    }
    else {
        echo "New and confirm password does not match";
        header('location:admin_changePassword.php?e=3');
    }
}
else {
    echo "Old InValid";
    header('location:admin_changePassword.php?e=4');
}