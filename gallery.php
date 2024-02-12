<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <title>Pawsitive - Gallery</title>
    <?php include "headerfiles.html" ?>
</head>
<body class="dark">
<div id="wrapper">
    <?php include "publicheader.html" ?>
    <!-- Start main-content -->
    <div class="main-content">

        <?php
        include 'connection.php';
        $select = 'select * from dog';
        $res = mysqli_query($conn, $select);
        ?>

        <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg1.jpg"
                 style="background-size:cover; background-position: center center; height: 50vh;">
            <div class="container pt-100 pb-50">
                <div class="section-content pt-100">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title text-white">Gallery</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        if (mysqli_num_rows($res)) { ?>
            <div class="row mt-20">
                <?php
                while ($row = mysqli_fetch_array($res)) { ?>
                    <div class="col-md-3 me-6 mb-20">
                        <img src="<?php echo $row['photo1'] ?>" class="rounded" style="height:20em;width:100%;">
                    </div>

                    <?php
                } ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>


<?php include "footer.html";
include "footer_scripts.html" ?>


</body>
</html>