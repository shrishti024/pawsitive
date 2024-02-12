<?php
include 'connection.php';
session_start();
if (!isset($_SESSION['seller'])) {
    header("Location:seller_login.php");
    exit();
}
$id = $_REQUEST['p'];
$breed = $_REQUEST['breed'];
$desc = urlencode($_REQUEST['desc']);
$price = $_REQUEST['price'];
$age = $_REQUEST['age'];
$agetype = $_REQUEST['age_type'];
$gender = $_REQUEST['gender'];
$photo1 = $_FILES['photo1']['name'];
$photo2 = $_FILES['photo2']['name'];
$photo3 = $_FILES['photo3']['name'];
$color = $_REQUEST['color'];
$weight = $_REQUEST['weight'];
$weight_type = $_REQUEST['unit'];
$seller = $_SESSION['seller'];

if ($photo1 == "" && $photo2 == "" && $photo3 == "") {
    $update = "update dog set description='$desc',price='$price',age='$age',age_type='$agetype',gender='$gender',color='$color',weight='$weight',weighttype='$weight_type' where dog_id='$id'";
    echo $update;
}
else {
    if ($photo1 != "") {
        $temp1 = $_FILES['photo1']['tmp_name'];
        $ext1 = strtolower(pathinfo($photo1, PATHINFO_EXTENSION));
        $path1 = "dogImages/" . $photo1;
        $move1=move_uploaded_file($temp1,$path1);
        if ($ext1 == "png" || $ext1 == "jpg" || $ext1 == "jpeg" || $ext1 == "jfif") {
            $update = "update dog set description='$desc',price='$price',age='$age',age_type='$agetype',gender='$gender',color='$color',weight='$weight',weighttype='$weight_type',photo1='$path1' where dog_id='$id'";

        }
    }
    elseif ($photo2 != "") {
            $temp2 = $_FILES['photo2']['tmp_name'];
            $ext2 = strtolower(pathinfo($photo2, PATHINFO_EXTENSION));
            $path2 = "dogImages/" . $photo2;
            $move2=move_uploaded_file($temp2,$path2);
            if ($ext2 == "png" || $ext2 == "jpg" || $ext2 == "jpeg" || $ext2 == "jfif") {
                $update = "update dog set description='$desc',price='$price',age='$age',age_type='$agetype',gender='$gender',color='$color',weight='$weight',weighttype='$weight_type',photo2='$path2' where dog_id='$id'";

            }
        }
    elseif ($photo3 != "") {
            $temp3 = $_FILES['photo3']['tmp_name'];
            $ext3 = strtolower(pathinfo($photo3, PATHINFO_EXTENSION));
            $path3 = "dogImages/" . $photo3;
            $move1=move_uploaded_file($temp3,$path3);
            if ($ext3 == "png" || $ext3 == "jpg" || $ext3 == "jpeg" || $ext3 == "jfif") {
                $update = "update dog set description='$desc',price='$price',age='$age',age_type='$agetype',gender='$gender',color='$color',weight='$weight',weighttype='$weight_type',photo3='$path3' where dog_id='$id'";

            }
        }
    else{

        $temp1 = $_FILES['photo1']['tmp_name'];
        $temp2 = $_FILES['photo2']['tmp_name'];
        $temp3 = $_FILES['photo3']['tmp_name'];

        $ext1 = strtolower(pathinfo($photo1, PATHINFO_EXTENSION));
        $ext2 = strtolower(pathinfo($photo2, PATHINFO_EXTENSION));
        $ext3 = strtolower(pathinfo($photo3, PATHINFO_EXTENSION));

        $path1 = "dogImages/" . $photo1;
        $path2 = "dogImages/" . $photo2;
        $path3 = "dogImages/" . $photo3;
        if($ext1=="jpg"||$ext1=="png"||$ext1=="gif"||$ext1=="jpeg"||$ext1=="jfif"||$ext2=="jpg"||$ext2=="png"||$ext2=="gif"||$ext2=="jpeg"||$ext2=="jfif"||$ext3=="jpg"||$ext3=="png"||$ext3=="gif"||$ext3=="jpeg"||$ext3=="jfif"){
            $move1=move_uploaded_file($temp1,$path1);
            $move2=move_uploaded_file($temp2,$path2);
            $move3=move_uploaded_file($temp3,$path3);
            $update = "update dog set description='$desc',price='$price',age='$age',age_type='$agetype',gender='$gender',color='$color',weight='$weight',weighttype='$weight_type',photo1='$path1',photo2='$path2',photo3='$path3' where dog_id='$id'";


        }
    }
}
mysqli_query($conn, $update);
header("location:dog_view.php?e=1");