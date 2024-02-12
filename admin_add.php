<!doctype html>
<html lang="en">
<head>
    <title>Add Admin</title>
    <?php include "headerFiles.html" ?>
    <style>
        .error {
            color: red;
        }
    </style>
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
                                <li class="active text-theme-colored">Add Admin</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Add</span> Admin
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <form action="admin_addAction.php" method="post" class="admin_add-form-transparent mx-auto"
                                  id="admin-form">
                                <div class="row mb-2">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label for="uname">Username:</label>
                                            <input type="text" name="username" id="uname" class="form-control" data-rule-required="true"
                                                   data-msg-required="*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6 offset-2">
                                        <div class="form-group">
                                            <label for="pass">Password:</label>
                                            <input type="password" name="password" id="pass" class="form-control"
                                                   data-rule-required="true" data-msg-required="*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cpass"> Confirm Password:</label>
                                            <input type="password" name="cpassword" id="cpass" class="form-control "
                                                   data-rule-equalto="#pass">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fname"> Full Name:</label>
                                            <input type="text" name="fname" id="fname" class="form-control"
                                                   data-rule-required="true" data-msg-required="*">
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="form-group">
                                            <label for="phone">Phone:</label>
                                            <input type="text" name="phone" id="phone" class="form-control"
                                                   data-rule-required="true" data-msg-required="*">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" name="email" id="email" class="form-control"
                                                   data-rule-required="true" data-msg-required="*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Admin Type:</label>
                                            <select name="type" class="form-control" id="type" data-rule-required="true"
                                                    data-msg-required="*">
                                                <option value="">Select</option>
                                                <option value="admin">Admin</option>
                                                <option value="sub-admin">Sub-Admin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn  btn-theme-colored form-control">Submit
                                </button>
                                <?php
                                if (isset($_REQUEST['e'])) {
                                    if ($_REQUEST['e'] == 1) {
                                        echo "<div class='alert alert-danger'>User already exists</div>";
                                    } else {
                                        echo "<div class='alert alert-success'>User added successfully</div>";
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





