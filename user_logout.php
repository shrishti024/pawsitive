<?php
session_start();
session_destroy();
if($_REQUEST['q']=="user"){
    $_SESSION['user']=null;
    header("location:index.php");
}
