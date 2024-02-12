<!doctype html>
<html lang="en">
<head>
    <title>Product Orders</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include 'seller_header.php' ?>
<div class="container">
    <h2 class="text-gray-darkgray">View Product Order Details</h2>
    <hr>
    <?php
    include 'connection.php';
    $query = "SELECT  product_orders.orderid, 
        product.pro_name,
        product.price, 
        product.description,
        product.photo1,
        product_orders.date,
        product_orders.status FROM product_orders 
    JOIN product_orderdetails ON product_orders.orderid = product_orderdetails.orderid 
    JOIN product ON product_orderdetails.product = product.pro_id
    WHERE product.seller_email = '" . $_SESSION['seller'] . "'and product_orderdetails.orderid='" .$_REQUEST['q']."'
     ORDER BY product_orders.orderid DESC;";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)){
        ?>
        <table class="table text-black">
            <thead>
            <tr>
                <th>Sr.No</th>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Price(&#x20B9;)</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Order Date</th>
                <th>Order Status</th>
                <th colspan="2">Controls</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i=1;
            while($row=mysqli_fetch_array($result)){
                ?>
                <tr>
                   <td><?php echo $i?></td>
                    <td><?php echo $row['orderid']?></td>
                    <td><?php echo $row['pro_name']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['description']?></td>
                    <td>
                        <?php if(!empty($row['photo1'])){ ?>
                            <img src="<?php echo $row['photo1']?>" width="100px" height="100px">
                        <?php } else { ?>
                            No photo available
                        <?php } ?>
                    </td>
                    <td><?php echo $row['date']?></td>
                    <td><?php echo $row['status']?></td>
                    <td>
                        <a href="product_orderUpdate.php?q=<?php echo $row[0] ?>&action=ship">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-truck"></i></button>
                        </a>
                    </td>
                     <td>
                        <a href="product_orderUpdate.php?q=<?php echo $row[0] ?>&action=delivered">
                            <button type="button" class="btn btn-success">
                                <i class="fa fa-check"></i></button>
                        </a>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "<div class='alert alert-danger'>
            <strong>No Data Found!</strong>
            </div>";
    }
    if(isset($_REQUEST['e'])){
        if($_REQUEST['e']==1){
            echo '<div class="alert alert-success">Status updated successfully</div>';
        }
        else{
            echo '<div class="alert alert-danger">Error Updating the status</div>';

        }
    }
    ?>


</div>
<?php include "footer.html";
include "footer_scripts.html" ?>
</body>
</html>

