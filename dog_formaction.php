<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['seller'])) {
    header("Location:seller_login.php");
    exit();
}
$breed=$_REQUEST['breed'];
$desc=urlencode($_REQUEST['desc']);
$price=$_REQUEST['price'];
$age=$_REQUEST['age'];
$agetype=$_REQUEST['age_type'];
$photo1=$_FILES['photo1']['name'];
$tmp_name1=$_FILES['photo1']['tmp_name'];
$photo2=$_FILES['photo2']['name'];
$tmp_name2=$_FILES['photo2']['tmp_name'];
$gender=$_REQUEST['gender'];
$color=$_REQUEST['color'];
$weight=$_REQUEST['weight'];
$weight_type=$_REQUEST['unit'];
$status=$_REQUEST['status'];
$seller= $_SESSION['seller'];


$ext1=pathinfo($photo1,PATHINFO_EXTENSION);
$ext2=pathinfo($photo2,PATHINFO_EXTENSION);
$path3="";
$photo3=$_FILES['photo3']['name'];
if($photo3!='')
{
    $tmp_name3=$_FILES['photo3']['tmp_name'];
    $ext3=pathinfo($photo3,PATHINFO_EXTENSION);
    if($ext3=="jpg"||$ext3=="png"||$ext3=="gif"||$ext3=="jpeg"||$ext3=="jfif"){
        $path3=trim('dogImages/'.$photo3);
        $move3=move_uploaded_file($tmp_name3,$path3);

    }
}

if($ext1=="jpg"||$ext1=="png"||$ext1=="gif"||$ext1=="jpeg"||$ext1=="jfif"||$ext2=="jpg"||$ext2=="png"||$ext2=="gif"||$ext2=="jpeg"||$ext2=="jfif")
{
    $path1='dogImages/'.$photo1;
    $path2='dogImages/'.$photo2;

    $move1=move_uploaded_file($tmp_name1,$path1);
    $move2=move_uploaded_file($tmp_name2,$path2);
    $insert="insert into dog values('null','$breed','$desc','$price','$age','$agetype',' $path1',' $path2',' $path3','$gender','$color','$weight','$weight_type','$seller','$status')";
    echo $insert;
    mysqli_query($conn,$insert);
 header("location:dog_form.php?e=1");
}
else{
    header( "location:dog_form.php?e=2");
}
















