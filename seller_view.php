<!doctype html>
<html lang="en">
<head>
    <title>View Sellers</title>
    <?php include "headerFiles.html" ?>

</head>
<body>
<span class="dark"><?php include "admin_header.php" ?></span>
<div class="container">
    <h2>View Sellers</h2>
    <hr>
    <div class=" row alert alert-warning text-dark"><b>REQUESTING SELLERS</b></div>
    <?php
    include "connection.php";
    $select = "select * from seller where status='requested'";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>PhoneNo.</th>
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
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo urldecode($row['address']) ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                    <td><a href="admin_sellerUpdate.php?q=<?php echo $row[1]?>&action=accepted">
                            <button type="button" class="btn btn-success">
                                <i class='fa fa-check-square'></i></button>
                        </a></td>
                    <td><a href="admin_sellerUpdate.php?q=<?php echo $row[1]?>&action=rejected">
                            <button type="button" class="btn btn-danger">
                                <i class='fa fa-times'></i></button>
                        </a></td>
                </tr>
                <?php
                $i++;
            }
        } else {
            echo "<tr class='alert alert-danger'>
            <td colspan='7'>No Data Found</td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
    <div class=" row alert alert-success text-dark"><b>Accepted Sellers</b></div>
    <?php
    $select = "select * from seller where status='accepted'";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>PhoneNo.</th>
            <th>Status</th>
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
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo urldecode( $row['address'] )?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['status'] ?></td>

                </tr>
                <?php
                $i++;
            }
        } else {
            echo "<tr class='alert alert-danger'>
            <td colspan='7'>No Data Found</td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
    <div class=" row alert alert-dark text-dark"><b>Rejected Sellers</b></div>
    <?php
    include "connection.php";
    $select = "select * from seller where status='rejected'";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table  text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>PhoneNo.</th>
            <th>Status</th>
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
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo urldecode($row['address']) ?></td>
                    <td><?php echo $row['city'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['status'] ?></td>
                </tr>
                <?php
                $i++;
            }
        } else {
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

