<!doctype html>
<html lang="en">
<head>
    <title>Seller Homepage</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include 'seller_header.php' ?>
<div class="container">
    <h2 class="text-gray-darkgray">View Dog Order Details</h2>
    <?php
    include 'connection.php';
    $query = "SELECT  dog_orders.orderid, 
        dog.breed,
        dog.price, 
        dog.age,
        dog.age_type,
        dog.gender,
        dog.photo1,
        dog_orders.date,
        dog_orders.status FROM dog_orders 
    JOIN dog_orderdetails ON dog_orders.orderid = dog_orderdetails.orderid 
    JOIN dog ON dog_orderdetails.dog = dog.dog_id
    WHERE dog.selleremail = '" . $_SESSION['seller'] . "'dog_orderdetails.orderid='" .$_REQUEST['q']."'
    ORDER BY dog_orders.orderid DESC;";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)){
        ?>
        <table class="table text-black">
            <thead>
            <tr>
                <th>Sr.No</th>
                <th>Order ID</th>
                <th>Breed</th>
                <th>Price(&#x20B9;)</th>
                <th>Age</th>
                <th>Gender</th>
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
                    <td><?php echo $row['breed']?></td>
                    <td><?php echo $row['price']?></td>
                    <td><?php echo $row['age']?><?php echo $row['age_type']?></td>
                    <td><?php echo $row['gender']?></td>
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
                        <a href="dog_orderUpdate.php?q=<?php echo $row[0] ?>&action=ship">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-truck"></i></button>
                        </a>
                    </td>
                     <td>
                        <a href="dog_orderUpdate.php?q=<?php echo $row[0] ?>&action=delivered">
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
