<!doctype html>
<html lang="en">
<head>
    <title>User Signup</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<div class="">
    <div class="dark"><?php include "publicheader.html" ?></div>
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay overlay-white-3" data-bg-img="images/bg/bg12.jpg"
                 style="background-size: cover; background-position: center center; height: 70vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">User Signup</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">User</span> Signup
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="user_signupAction.php" method="post" class="user_signup-form-transparent"
                                  id="user-form">
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label for="email">Email:</label>
                                        <input type="text" name="email" id="email" class="form-control"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <label for="pass">Password:</label>
                                        <input type="password" name="pass" id="pass" class="form-control"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                    <div class="col-md-6 ">
                                        <label for="cpass">Confirm Password:</label>
                                        <input type="password" name="cpass" id="cpass" class="form-control"
                                               data-rule-equalto="#pass">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6 ">
                                        <label for="fname">First Name:</label>
                                        <input type="text" name="fname" id="fname" class="form-control"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                    <div class="col-md-6 ">
                                        <label for="lname">Last Name:</label>
                                        <input type="text" name="lname" id="lname" class="form-control"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-12">
                                        <label for="gender">Gender:</label>
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="male">
                                        <label for="male">Male</label>
                                        <span class="col-md-offset-1">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="female">
                                                <label for="female">Female</label></span>
                                        <span class="col-md-offset-1">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="Other">
                                                <label for="Other">Other</label></span>
                                        <span class="col-md-offset-1">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="Not Said">
                                                <label for="Not Said">Prefer Not to Mention</label></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <label for="phone">PhoneNo.:</label>
                                        <input type="digit" name="phone" id="phone" class="form-control"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-12 ">
                                        <label for="address">Address:</label>
                                        <textarea name="address" id="address" class="form-control"
                                                  data-rule-required="true" data-msg-required="*"></textarea>

                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <label for="pin">Pin:</label>
                                        <input type="digit" name="pin" id="pin" class="form-control"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                    <div class="col-md-6 ">
                                        <label for="city">City:</label>
                                        <input type="text" name="city" id="city" class="form-control"
                                               data-rule-required="true" data-msg-required="*">

                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <label for="state">State:</label>
                                        <input type="text" name="state" id="state" class="form-control"
                                               data-rule-required="true" data-msg-required="*">

                                    </div>
                                    <div class="col-md-6">
                                        <label for="country">Country:</label>
                                        <input type="text" name="country" id="country" class="form-control"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-12 ">
                                        <button type="submit" class="form-control btn-theme-colored">Signup</button>
                                    </div>
                                </div>
                                <div class="row mt-15">
                                    <div class="col-md-12">
                                        Already have an account?<a href="user_login.php">Login here</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        </section>
    </div>
</div>
<?php
if (isset($_REQUEST['e'])) {
    if ($_REQUEST['e'] == 1) {
        echo "<div class='alert alert-danger'>Email already exists</div>";
    } else {
        echo "<div class='alert alert-success'>User added successfully</div>";
    }
}
?>
<?php
include 'footer.html';
include 'footer_scripts.html';
?>
</body>
</html>

