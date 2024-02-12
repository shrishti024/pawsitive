<?php
session_start();
session_destroy();
if($_REQUEST['q']=="seller"){
    $_SESSION['seller']=null;
    header("location:index.php");
}
