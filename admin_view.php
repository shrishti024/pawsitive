<!doctype html>
<html lang="en">
<head>
    <title>View Admin</title>
    <?php include "headerFiles.html" ?>

</head>
<body>
<span class="dark"><?php include "admin_header.php" ?></span>
<div class="container ">
    <h2>View Admin</h2>
    <hr>
    <?php
    include "connection.php";
    $select = "select * from admin";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>PhoneNo.</th>
            <th>Admin Type</th>
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
                    <td><?php echo $row['username'] ?></td>
                    <td><?php echo $row['fullname'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['phoneno'] ?></td>
                    <td><?php echo $row['admintype'] ?></td>
                    <td><a href="admin_update.php?q=<?php echo $row[0] ?>">
                            <button type="button" class="btn btn-warning">
                                <i class="fa fa-pencil-square"></i></button>
                        </a></td>
                    <td><a href="admin_delete.php?q=<?php echo $row[0] ?>">
                            <button type="button" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                <i class="fa fa-trash"></i></button>
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
</div>
<?php
include 'footer.html';
include "footer_scripts.html";?>
</body>
</html>
