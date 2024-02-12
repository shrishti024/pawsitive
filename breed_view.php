<!doctype html>
<html lang="en">
<head>
    <title>View Breeds</title>
    <?php include "headerFiles.html" ?>
</head>
<body>
<span class="dark"><?php include "admin_header.php" ?></span>
<div class="container">
    <h2>View Breeds</h2>
    <hr>
    <?php
    include "connection.php";
    $select = "select * from breed";
    $res = mysqli_query($conn, $select);
    ?>
    <table class="table text-black
">
        <thead>
        <tr>
            <th>Sr.No</th>
            <th>Name</th>
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
            <td><?php echo $row['name']?></td>
            <td><?php echo urldecode( $row['description'])?></td>
            <td><a href="breed_delete.php?q=<?php echo $row[0] ?>">
                    <button type="button" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                        <i class="fa fa-trash"></i></button>
                </a></td>
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
