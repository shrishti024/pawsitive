<!doctype html>
<html lang="en">
<head>
    <title> Admin View Products</title>
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
            $select = "select * from product";
            $res = mysqli_query($conn, $select);
            ?>
            <th>Sr.No</th>
            <th>Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Photo1</th>
            <th>Photo2</th>
            <th>Description</th>
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
                    <td><?php echo $row['category'] ?></td>
                    <td><?php echo $row['pro_name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><img src="<?php echo $row['photo1'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td><img src="<?php echo $row['photo2'] ?>" width="45%" height="45%" alt="No Image"></td>
                    <td><?php echo urldecode($row['description']) ?></td>
                    <td><?php echo $row['seller_email']?></td>
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



