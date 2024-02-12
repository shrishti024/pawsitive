<!doctype html>
<html lang="en">
<head>
    <title>View Dogs</title>
    <?php include "headerFiles.html" ?>

</head>
<body>
<span class="dark"><?php include "seller_header.php" ?></span>
<div class="container">
    <h2>View Dogs</h2>
    <hr>
    <?php
    include "connection.php";
    $seller=$_SESSION['seller'];
    $select = "select * from dog where selleremail='$seller'";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Breed</th>
            <th>Description</th>
            <th>Price(&#x20B9)</th>
            <th>Age</th>
            <th>Photo1</th>
            <th>Photo2</th>
            <th>Photo3</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Weight</th>
            <th>Status</th>
            <th colspan="2">Controls</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if (mysqli_num_rows($res)) {
            $i = 1;
            while ($row = mysqli_fetch_array($res)) {
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['breed'] ?></td>
                    <td><?php echo urldecode($row['description']) ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['age']?><?php echo $row['age_type']?></td>
                    <td> <img src="<?php echo $row['photo1'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td> <img src="<?php echo $row['photo2'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td> <img src="<?php echo $row['photo3'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['color'] ?></td>
                    <td><?php echo $row['weight'] ?><?php echo $row['weighttype'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><a href="dog_update.php?q=<?php echo $row[0] ?>">
                            <button type="button" class="btn btn-warning">
                                <i class="fa fa-pencil-square"></i></button>
                        </a></td>
                    <td><a href="dog_delete.php?q=<?php echo $row[0] ?>">
                            <button type="button" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                <i class="fa fa-trash"></i></button>
                        </a></td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo "<tr class='alert alert-danger'>
            <td colspan='15'>No Data Found</td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
<?php
if(isset($_REQUEST['e'])){
    if($_REQUEST['e']==1){
        echo"<div class='alert alert-success'>Record updated successfully</div>";
    }
}
    ?>
</div>
<?php
include 'footer.html';
include 'footer_scripts.html'?>
</body>
</html>

