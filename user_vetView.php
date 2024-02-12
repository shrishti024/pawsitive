<!doctype html>
<html lang="en">
<head>
    <title>User Home</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include 'user_header.php' ?></span>
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay " data-bg-img="images/bg/bg3.jpg"
             style="background-size: cover; background-position: center center; height: 50vh;">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Book Appoinment</h2>

                        <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                            <li><a href="index.php">Home</a></li>
                            <li class="active text-theme-colored">Appointment Booking</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_REQUEST['e'])) {
            if ($_REQUEST['e'] == 1) {
                echo '<div class="alert alert-danger">Appointment is already scheduled</div>';
            } else {
                echo '"<div class="alert alert-success">Record added successfully. You will receive an appointment confirmation email on your registered email id.</div>"';

            }
        }

        ?>
    </section>

    <section class="layer-overlay overlay-dark-8" data-bg-img="images/pattern/p6.png">
        <div class="container pb-17">

            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-white mt-0 line-height-1">Meet Our<span class="text-theme-colored"> Veterinary Doctor</span>
                        </h2>
                    </div>
                </div>
            </div>
            <?php
            include 'connection.php';
            $select = 'select * from vet where status="accepted"';
            $res = mysqli_query($conn, $select);
            ?>
            <div class="container">
                <?php
                if (mysqli_num_rows($res)) { ?>
                    <div class="row mb-2">
                        <?php
                        while ($row = mysqli_fetch_array($res)) { ?>
                            <div class="col-md-3 me-6 mb-2">
                                <div class="card" style="background: none; border: 0px">
                                    <div class="card-header">
                                        <img src="<?php echo $row['photo'] ?>" class="rounded"
                                             style="height:20em;width:100%;">

                                    </div>
                                    <div class="card-body">
                                        <h6><span class="text-white"> <?php echo $row['name'] ?></span></h6>
                                        <h5><span class="text-white"><?php echo $row['degree'] ?> </span></h5>
                                    </div>
                                    <div class="card-footer">
                                        <a href="appointment_form.php?p=<?php echo $row['email'] ?>"
                                           class="btn btn-link">
                                            <button class="btn btn-theme-colored"> Book an appointment
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } ?>
                    </div>
                    <?php
                }
                ?>
            </div>

        </div>
    </section>
</div>
<?php include "footer.html";
include "footer_scripts.html"; ?>
</body>
</html>




