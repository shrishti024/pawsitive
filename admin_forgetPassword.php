<!doctype html>
<html lang="en">
<head>
    <title>Forgot Password</title>
    <?php include "headerFiles.html" ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<span class="dark"><?php include "publicheader.html" ?></span>
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
                                <li class="active text-theme-colored">Forgot Password</li>
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
                        <div class="col-md-6 col-md-offset-3">
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Forgot</span>Password
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <form action="admin_forgetPasswordAction.php" method="post" class="forgotpassword-form-transparent mx-auto"
                                  id="admin-form">

                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                   data-rule-required="true" data-msg-required="*">
                                        </div>
                                    </div >
                                    <div class="col-md-4 col-md-offset-4">
                                        <button type="submit" class="btn  btn-theme-colored form-control">Submit
                                        </button></div>
                                    <div class="col-md-8 col-md-offset-2">
                                        <h5> <span class="text-danger">*Check your registered email for the System Generated Password to Login.*</span></h5>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
    if (isset($_REQUEST['e'])) {
        if ($_REQUEST['e'] == 1) {
            echo "<div class='alert alert-danger'>Email is not registered</div>";
        }
    }
    ?>

</div>
<?php
include 'footer.html';
include 'footer_scripts.html';
?>
</body>
</html>






