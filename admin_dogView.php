<!doctype html>
<html lang="en">
<head>
    <title> Admin View Dogs</title>
    <?php include "headerfiles.html" ?>

</head>
<body>
<span class="dark"><?php include "admin_header.php" ?></span>
<div class="container">
    <h2>View Dogs</h2>
    <hr>

    <table class="table text-black">
        <thead>
        <tr>
            <?php
            include "connection.php";
            $select = "select * from dog";
            $res = mysqli_query($conn, $select);
            ?>
            <th>Sr.No</th>
            <th>Breed</th>
            <th>Description</th>
            <th>Price</th>
            <th>Age</th>
            <th>Photo1</th>
            <th>Photo2</th>
            <th>Photo3</th>
            <th>Gender</th>
            <th>Color</th>
            <th>Weight</th>
            <th>Status</th>
            <th>Seller Email</th>
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
                    <td><?php echo urldecode($row['description'] )?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['age'] ?><?php echo $row['age_type'] ?></td>
                    <td><img src="<?php echo $row['photo1'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td><img src="<?php echo $row['photo2'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td><img src="<?php echo $row['photo3'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td><?php echo $row['gender'] ?></td>
                    <td><?php echo $row['color'] ?></td>
                    <td><?php echo $row['weight'] ?><?php echo $row['weighttype'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><?php echo $row['selleremail']?></td>
                </tr>
                <?php
                $i++;
            }
        }
        else {
            echo "<tr class='alert alert-danger'>
            <td colspan='10'><h4 class='text-center'>No Data Found</h4></td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
    <?php
    if (isset($_REQUEST['e'])) {
        if ($_REQUEST['e'] == 1) {
            echo "<div class='alert alert-success'>Record deleted successfully</div>";
        }
    }
    ?>

</div>
</body>
<?php include "footer.html" ?>
<?php include "footer_scripts.html" ?>
</html>


