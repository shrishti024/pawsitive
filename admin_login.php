<!doctype html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <?php include "headerFiles.html" ?>
</head>
<body>
<span class="dark"><?php include "publicheader.html" ?></span>
<div class="">
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay overlay-white-3" data-bg-img="images/bg/bg10.jpeg"
                 style="background-size: cover; background-position: center center; height:60vh;">

            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">Admin Login</li>
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
                        <div class="col-md-8 col-md-offset-2 ">
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Admin</span> Login
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 ">
                            <form action="admin_loginAction.php" method="post"
                                  class="was-validated admin_login-form-transparent"
                                  id="admin-form">
                                <div class="row mb-4">
                                    <div class="col-md-8 col-md-offset-2 ">
                                        <label for="username">Username:</label>
                                        <input type="text" class="form-control" id="username" name="username" data-rule-required="true">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-8 col-md-offset-2 ">
                                        <label for="pass">Password:</label>
                                        <input type="password" class="form-control" id="pass" name="pass" data-rule-required="true">
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-8 col-md-offset-2 ">
                                        <button type="submit" class="btn btn-theme-colored form-control">Login</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-2 ">
                                    </div>
                                    <div class="col-md-4 col-md-offset-2 ">
                                        <label for="forget"><a href="admin_forgetPassword.php">Forgot
                                                Password?</a></label>
                                    </div>
                                </div>
                                <?php
                                if (isset($_REQUEST['e'])) {
                                    if ($_REQUEST['e'] == 1) {
                                        echo "<div class='alert alert-danger'>Incorrect Username or Password</div>";
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
<?php
include 'footer.html';
include 'footer_scripts.html';
?>
</body>
</html>




