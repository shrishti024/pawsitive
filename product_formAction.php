<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['seller'])) {
    header("Location:seller_login.php");
    exit();
}
$category=$_REQUEST['category'];
$name=$_REQUEST['name'];
$price=$_REQUEST['price'];
$photo1=$_FILES['photo1']['name'];
$tmp_name1=$_FILES['photo1']['tmp_name'];
$photo2=$_FILES['photo2']['name'];
$tmp_name2=$_FILES['photo2']['tmp_name'];
$description=urlencode($_REQUEST['desc']);
$seller= $_SESSION['seller'];


$ext1=pathinfo($photo1,PATHINFO_EXTENSION);
$ext2=pathinfo($photo2,PATHINFO_EXTENSION);
if($ext1=="jpg"||$ext1=="png"||$ext1=="gif"||$ext1=="jpeg"||$ext1=="jfif"||$ext2=="jpg"||$ext2=="png"||$ext2=="gif"||$ext2=="jpeg"||$ext2=="jfif") {
    $path1 = 'productImages/' . $photo1;
    $path2 = 'productImages/' . $photo2;
    $move1 = move_uploaded_file($tmp_name1, $path1);
    $move2 = move_uploaded_file($tmp_name2, $path2);
    $insert = "insert into product values('null','$category','$name','$price',' $path1',' $path2','$description','$seller',0)";
    echo $insert;
    mysqli_query($conn, $insert);
    header("location:product_form.php?e=1");
}
else{
    header( "location:product_form.php?e=2");
}

















