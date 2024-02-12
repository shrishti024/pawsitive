<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['seller'])) {
    header("Location:seller_login.php");
    exit();
}
$id = $_REQUEST['p'];
$category = $_REQUEST['category'];
$name = $_REQUEST['name'];
$desc = urlencode($_REQUEST['desc']);
$price = $_REQUEST['price'];
$photo1 = $_FILES['photo1']['name'];
$photo2 = $_FILES['photo2']['name'];
$seller = $_SESSION['seller'];

if ($photo1 == "" && $photo2 == "") {
    $update = "update product set description='$desc',price='$price',pro_name='$name' where pro_id='$id'";
    echo $update;
}
else {
    if ($photo1 != "") {
        $temp1 = $_FILES['photo1']['tmp_name'];
        $ext1 = strtolower(pathinfo($photo1, PATHINFO_EXTENSION));
        $path1 = "productImages/" . $photo1;
        $move1=move_uploaded_file($temp1,$path1);
        if ($ext1 == "png" || $ext1 == "jpg" || $ext1 == "jpeg" || $ext1 == "jfif") {
            $update = "update product set description='$desc',price='$price',pro_name='$name',photo1='$path1' where pro_id='$id'";

        }
    }
    elseif ($photo2 != "") {
        $temp2 = $_FILES['photo2']['tmp_name'];
        $ext2 = strtolower(pathinfo($photo2, PATHINFO_EXTENSION));
        $path2 = "productImages/" . $photo2;
        $move2=move_uploaded_file($temp2,$path2);
        if ($ext2 == "png" || $ext2 == "jpg" || $ext2 == "jpeg" || $ext2 == "jfif") {
            $update = "update product set description='$desc',price='$price',pro_name='$name',photo2='$path2' where pro_id='$id'";

        }
    }

    else{

        $temp1 = $_FILES['photo1']['tmp_name'];
        $temp2 = $_FILES['photo2']['tmp_name'];

        $ext1 = strtolower(pathinfo($photo1, PATHINFO_EXTENSION));
        $ext2 = strtolower(pathinfo($photo2, PATHINFO_EXTENSION));

        $path1 = "productImages/" . $photo1;
        $path2 = "productImages/" . $photo2;
        if($ext1=="jpg"||$ext1=="png"||$ext1=="gif"||$ext1=="jpeg"||$ext1=="jfif"||$ext2=="jpg"||$ext2=="png"||$ext2=="gif"||$ext2=="jpeg"||$ext2=="jfif"){
            $move1=move_uploaded_file($temp1,$path1);
            $move2=move_uploaded_file($temp2,$path2);
            $update = "update product set description='$desc',price='$price',name='$name',photo1='$path1',photo2='$path2' where pro_id='$id'";


        }
    }
}
mysqli_query($conn, $update);
header("location:product_view.php?e=1");