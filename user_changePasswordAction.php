<?php
include "connection.php";
$email = $_REQUEST['email'];
$oldpassword = $_REQUEST['password'];
$newpassword = $_REQUEST['newpassword'];
$confirmpassword = $_REQUEST['confirmpassword'];
$select = "select password from user where email='$email' and password='$oldpassword'";
$res = mysqli_query($conn, $select);
if (mysqli_num_rows($res)) {
    if ($newpassword == $confirmpassword) {
        $update = "update user set password='$newpassword' where email='$email'";
        header('location:user_changePassword.php?e=1');
        echo "updated";
        mysqli_query($conn,$update);
        if ($newpassword == $oldpassword) {
            echo "Not Updated";
            header('location:user_changePassword.php?e=2');
        }
    }
    else {
        echo "New and confirm password does not match";
        header('location:user_changePassword.php?e=3');
    }
}
else {
    echo "Old InValid";
    header('location:user_changePassword.php?e=4');
}

