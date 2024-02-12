<!doctype html>
<html lang="en">
<head>
    <title>Seller Login</title>
    <?php include "headerFiles.html" ?>
</head>
<body>
<div class="">
    <span class="dark"><?php include "publicheader.html" ?></span>
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay " data-bg-img="images/bg/bg11.jpeg"
                 style="background-size: cover; background-position: center center; height: 70vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">Seller Login</li>
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
                        <div class="col-md-8 col-md-offset-2" >
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Seller</span>
                                Login</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" >
                            <form action="seller_loginaction.php" method="post"
                                  class=class="seller_login-form-transparent" id="seller-form">
                                <div class="row mb-4">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="pass">Password:</label>
                                        <input type="password" class="form-control" id="pass" name="pass">
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <button type="submit" class="btn btn-theme-colored form-control">Login</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-2" >
                                    </div>
                                    <div class="col-md-4 col-md-offset-2" >
                                        <label for="forget"><a href="seller_forgetPassword.php">Forgot Password?</a></label>
                                    </div>
                                </div>
                                <div class=" row text-center mt-4 ">
                                    <div class="col-md-8 col-md-offset-2" >
                                        Don't have an account?
                                        <a href="seller_signup.php">
                                            Register here
                                        </a>
                                    </div>
                                </div>
                                    <?php
                                    if (isset($_REQUEST['e'])) {
                                        if ($_REQUEST['e'] == 1) {
                                            echo "<div class='alert alert-danger'>Request not Accepted yet</div>";

                                        } elseif ($_REQUEST['e'] == 2) {
                                            echo "<div class='alert alert-danger'>Incorrect Email or Password</div>";
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








