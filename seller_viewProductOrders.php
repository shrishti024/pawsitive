<!doctype html>
<html lang="en">
<head>
    <title>Product Orders</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include 'seller_header.php' ?></span>
<div class="container">
    <h2>View Product Orders</h2>
    <?php
    include 'connection.php';
    $seller = $_SESSION['seller'];
    $select = "select * from product_orders where selleremail='$seller'";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>OrderID</th>
            <th>User Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip</th>
            <th>State</th>
            <th>Payment Type</th>
            <th>Grand Total</th>
            <th>Status</th>
            <th>Date</th>
            <th colspan="2">Controls</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($res)){
            $i=1;
            while($row=mysqli_fetch_array($res)){
                ?>
                <tr>
                    <td><?php echo $i?></td>
                    <td><?php echo $row['orderid']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['phone']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['city']?></td>
                    <td><?php echo $row['zip']?></td>
                    <td><?php echo $row['state']?></td>
                    <td><?php echo $row['payment_type']?></td>
                    <td><?php echo $row['grand_total']?></td>
                    <td><?php echo $row['status']?></td>
                    <td><?php echo $row['date']?></td>
                    <td><a href="product_orderDetails.php?q=<?php echo $row[0] ?>">
                            <button type="button" class="btn btn-warning">
                                <i class="fa fa-eye"></i></button>
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
</div>
</body>
<?php include "footer.html";
include "footer_scripts.html" ?>
</html>


