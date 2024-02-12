<!DOCTYPE html>
<html>
<head>
    <?php include "headerfiles.html" ?>
    <title>User Login</title>
</head>
<body class="">
<span class="dark"><?php include "publicheader.html" ?></span>
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay " data-bg-img="images/bg/bg12.jpg"
             style="background-size: cover; background-position: center center; height: 70vh;">

        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                            <li><a href="index.php">Home</a></li>
                            <li class="active text-theme-colored">User Login</li>
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
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">User</span> Login</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form class="user_login-form-transparent" id="user-form" action="user_loginAction.php"
                              method="post">
                            <div class="row mb-2">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                           data-rule-required="true"
                                           data-msg-required="*">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="pass">Password</label>
                                    <input type="password" name="password" id="pass" class="form-control"
                                           data-rule-required="true"
                                           data-msg-required="*">
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="form-control btn btn-theme-colored">Login</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-2">

                                </div>
                                <span class="col-md-4 col-md-offset-2">
                                <label for="forget"><a href="user_forgetPassword.php">Forgot Password?</a></label>
                            </span>
                            </div>
                            <div class=" row text-center mt-4 ">
                                <div class="col-md-8 col-md-offset-2"> Don't have an account?
                                    <a href="user_signup.php">
                                        Register here
                                    </a>
                                </div>
                            </div>
                            <?php
                            if (isset($_REQUEST['e'])) {
                                if ($_REQUEST['e'] == 1) {
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
<?php include 'footer.html';
include 'footer_scripts.html'; ?>
</body>
</html>


