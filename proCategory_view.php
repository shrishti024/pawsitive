<!doctype html>
<html lang="en">
<head>
    <title>View Product Categories</title>
    <?php include "headerFiles.html" ?>
</head>
<body>
<span class="dark"><?php include "admin_header.php" ?></span>
<div class="container">
    <h2>View Product Categories</h2>
    <hr>
    <?php
    include "connection.php";
    $select = "select * from category";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Product Category</th>
            <th>Description</th>
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
                    <td><?php echo $row['category']?></td>
                    <td><?php echo urldecode($row['description'])?></td>
                </tr>
                <?php
                $i++;
            }
        }
        else {
            echo "<tr class='alert alert-danger'>
            <td colspan='7'>No Data Found</td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>
<?php
include 'footer.html';
include 'footer_scripts.html'?>
</body>
</html>

