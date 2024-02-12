<!doctype html>
<html lang="en">
<head>
    <title>My Dog Orders</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include 'user_header.php' ?>
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
    WHERE dog_orders.user_email = '" . $_SESSION['user'] . "'
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

    ?>
</div>
<?php include "footer.html";
include "footer_scripts.html" ?>
</body>
</html>
