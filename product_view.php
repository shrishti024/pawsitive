<!doctype html>
<html lang="en">
<head>
    <title> Seller View Product</title>
    <?php include "headerfiles.html" ?>

</head>
<body>
<span class="dark"><?php include "seller_header.php" ?></span>
<div class="container">
    <h2>View Product</h2>
    <hr>
    <?php
    include "connection.php";
    $seller=$_SESSION['seller'];
    $select = "select * from product where seller_email='$seller'";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Category</th>
            <th>Name</th>
            <th>Price</th>
            <th>Photo1</th>
            <th>Photo2</th>
            <th>Description</th>
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
                    <td><?php echo $row['category'] ?></td>
                    <td><?php echo $row['pro_name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><img src="<?php echo $row['photo1'] ?>" width="25%" height="25%" alt="No Image"></td>
                    <td><img src="<?php echo $row['photo2'] ?>" width="25%" height="25%" alt="No Image"></td>
                    <td><?php echo urldecode($row['description']) ?></td>
                      <td><a href="product_update.php?q=<?php echo $row[0] ?>">
                            <button type="button" class="btn btn-warning">
                                <i class="fa fa-pencil-square"></i></button>
                        </a></td>
                    <td><a href="product_delete.php?q=<?php echo $row[0] ?>">
                            <button type="button" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                <i class="fa fa-trash"></i></button>
                        </a></td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo "<tr class='alert alert-danger'>
            <td colspan='8'><h4 class='text-center'>No Data Found</h4></td>
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


