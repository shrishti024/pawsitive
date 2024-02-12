<!doctype html>
<html lang="en">
<head>
    <title>Update Admin</title>
    <?php include "headerFiles.html" ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<span class="dark"><?php include "admin_header.php" ?></span>
<?php
include "connection.php";
$user = $_REQUEST['q'];
$select = "select * from admin where username='$user'";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<div class="">
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay overlay-white-3" data-bg-img="images/bg/bg10.jpeg"
                 style="background-size: cover; background-position: center center; height:50vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">Admin Profile</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Admin</span>Update
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" >
                            <form action="admin_updateAction.php" method="post" class="admin_update-form-transparent"
                                  id="admin-form">
                                <div class="row mb-2">
                                    <div class="col-md-12 ">
                                        <label for="uname">Username:</label><br>
                                        <span class="form-control"><?php echo $row['username'] ?></span>
                                        <input type="hidden" name="username" id="uname" class="form-control"
                                               value="<?php echo $row['username'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <label for="fname"> Full Name:<i class="fa fa-edit"></i></label>
                                        <input type="text" name="fname" id="fname" class="form-control"
                                               data-rule-required="true" data-msg-required="*"
                                               value="<?php echo $row['fullname'] ?>"/>
                                    </div>
                                    <div class="col-md-6 ">
                                        <label for="phone">Phone:<i class="fa fa-edit"></i></label>
                                        <input type="text" name="phone" id="phone" class="form-control"
                                               data-rule-required="true" data-msg-required="*"
                                               value="<?php echo $row['phoneno'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6">
                                        <label for="email">Email:<i class="fa fa-edit"></i></label>
                                        <input type="email" name="email" id="email" class="form-control"
                                               data-rule-required="true" data-msg-required="*"
                                               value="<?php echo $row['email'] ?>"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="type">Admin Type:<i class="fa fa-edit"></i></label>
                                        <select name="type" class="form-control" id="type" data-rule-required="true"
                                                data-msg-required="*">
                                            <option value="<?php echo $row['admintype'] ?>"><?php echo $row['admintype'] ?></option>
                                            <option value="admin">Admin</option>
                                            <option value="sub-admin">Sub-Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-12">
                                <button type="submit" class="btn btn-theme-colored form-control">Submit</button>
                                </div>
                                </div>
                                <?php
                                if (isset($_REQUEST['e'])) {
                                    if ($_REQUEST['e'] == 1) {
                                        echo "<div class='alert alert-success'>Updated successfully</div>";
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




