<!doctype html>
<html lang="en">
<head>
    <title> User View Appointments</title>
    <?php include "headerfiles.html" ?>

</head>
<body>
<span class="dark"><?php include "user_header.php" ?></span>
<div class="container">
    <h2>View Appointments</h2>
    <hr>
    <table class="table text-black">
        <thead>
        <tr>
            <?php
            include "connection.php";
            $select = "select * from appointment where user_email='".$_SESSION["user"]."'";
            $res = mysqli_query($conn, $select);
            ?>
            <th>Sr.No</th>
            <th>Appointment Id</th>
            <th>Vet Email</th>
            <th>Vet Name</th>
            <th>Dog Name</th>
            <th>Appointment Date</th>
            <th>Time</th>
            <th>Symptoms</th>
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
                    <td><?php echo $row['app_id'] ?></td>
                    <td><?php echo $row['vet_email'] ?></td>
                    <td><?php echo $row['vet_name'] ?></td>
                    <td><?php echo $row['dog_name'] ?></td>
                    <td><?php echo $row['app_date'] ?></td>
                    <td><?php echo $row['time_slot'] ?></td>
                    <td><?php echo urldecode($row['symptoms']) ?></td>
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

</div>
</body>
<?php include "footer.html" ?>
<?php include "footer_scripts.html" ?>
</html>



