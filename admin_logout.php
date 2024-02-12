<?php
session_start();
session_destroy();
if($_REQUEST['q']=="admin"){
    $_SESSION['admin']=null;
    header("location:admin_login.php");
}