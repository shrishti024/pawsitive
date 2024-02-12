<!doctype html>
<html lang="en">
<head>
    <title>Add Breed</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include "admin_header.php" ?></span>
<div class="">
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay overlay-white-3" data-bg-img="images/bg/bg10.jpeg"
                 style="background-size: cover; background-position: center center; height: 70vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">Add Breed</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section data-bg-img="images/pattern/p6.png">
            <div class="container">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" >
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Add</span>
                                Breed</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" >
                            <form action="breed_addaction.php" method="post" class="breed_add-form-transparent"
                                  id="admin-form">
                                <div class="row mb-2">
                                    <div class="col-md-6 col-md-offset-3" >
                                        <label for="name">Name:</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                               data-rule-reqired="true" data-msg-required="*">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6 col-md-offset-3" >
                                        <label for="des">Description:</label>
                                        <textarea id="des" name="des" class="form-control" data-rule-reqired="true"
                                                  data-msg-required="*"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-6 col-md-offset-3" >
                                        <button type="submit" class="btn btn-theme-colored form-control">Submit</button>
                                    </div>
                                </div>
                                <?php
                                if (isset($_REQUEST['e'])) {
                                    if ($_REQUEST['e'] == 1) {
                                        echo "<div class='alert alert-success'>Data Recorded Successfully</div>";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include 'footer.html';
include 'footer_scripts.html';
?>
</body>
</html>








