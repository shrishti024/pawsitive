<!doctype html>
<html lang="en">
<head>
    <title>Seller Signup</title>
    <?php include "headerFiles.html" ?>
    <style>
        .error {
            color: red;
        }
    </style>
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
                                <li class="active text-theme-colored">Seller Signup</li>
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
                                 Signup</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" >
                            <form action="seller_signupaction.php" method="post" class="seller_signup-form-transparent"
                                  id="seller-form">
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="fname"> Full Name:</label>
                                        <input type="text" name="fname" id="fname" class="form-control"
                                               data-rule-required="true"
                                               data-msg-required="*"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               data-rule-required="true"
                                               data-msg-required="*"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="password">Password:</label>
                                        <input type="password" name="pass" id="password" class="form-control"
                                               data-rule-required="true"
                                               data-msg-required="*"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="phone">Phone:</label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                               data-rule-required="true"
                                               data-msg-required="*"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="addr">Address:</label>
                                        <input type="text" name="address" id="addr" class="form-control"
                                               data-rule-required="true"
                                               data-msg-required="*"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="city">City:</label>
                                        <input type="text" name="city" id="addr" class="form-control"
                                               data-rule-required="true"
                                               data-msg-required="*"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <label for="state">State:</label>
                                        <input type="text" name="state" id="state" class="form-control"
                                               data-rule-required="true"
                                               data-msg-required="*"/>
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-8 col-md-offset-2" >
                                        <button type="submit" class="btn btn-theme-colored form-control" name="status"
                                                value="requested">Submit
                                        </button>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-4" >
                                        Already have an account?<a href="seller_login.php">Login here</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php
if (isset($_REQUEST['e'])) {
    if ($_REQUEST['e'] == 1) {
        echo "<div class='alert alert-danger'>User already exists</div>";
    } else {
        echo "<div class='alert alert-success'>Request sent successfully</div>";
    }
}
?>
<?php include 'footer.html';
include 'footer_scripts.html'; ?>
</body>
</html>






