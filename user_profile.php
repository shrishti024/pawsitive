<!doctype html>
<html lang="en">
<head>
    <title>My Profile</title>
    <?php include "headerFiles.html" ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<span class="dark"><?php include 'user_header.php' ?></span>
<?php
include "connection.php";
$email = $_SESSION['user'];
$select = "select * from user where email='$email'";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<div class="">
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
                                <li class="active text-theme-colored">User Profile</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">User</span> Profile
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="user_profileAction.php?q=<?php echo $row['email'] ?>" method="post"
                                  class="user_profile-form-transparent" id="user-form">
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="email">Email:</label><br>
                                        <span class="form-control"><?php echo $row['email'] ?></span>
                                        <input type="hidden" name="email" id="email" class="form-control"
                                               value="<?php echo $row['email'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-md-offset-2">
                                        <label for="fname"> First Name:<i class="fa fa-edit "></i>
                                        </label>
                                            <input type="text" name="fname" id="fname" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*" value="<?php echo $row['fname'] ?>"/>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lname"> Last Name:<i class="fa fa-edit"></i></label>
                                            <input type="text" name="lname" id="lname" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*" value="<?php echo $row['lname'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mt-10">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="gender">Gender:<i class="fa fa-edit "></i></label>
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="male"  <?php if ($row['gender'] == "male") echo "checked" ?>>
                                        <label for="male">Male</label>
                                        <span class="me-3">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="female" <?php if ($row['gender'] == "female") echo "checked" ?>>
                                                <label for="female">Female</label></span>
                                        <span class="me-3">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="Other" <?php if ($row['gender'] == "other") echo "checked" ?>>
                                                <label for="Other">Other</label></span>
                                        <span class="me-3">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="Not Said" <?php if ($row['gender'] == "Not Said") echo "checked" ?>>
                                                <label for="Not Said">Prefer Not to Mention</label></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="phone">Phone:<i class="fa fa-edit"></i></label>
                                            <input type="digit" name="phone" id="phone" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*" value="<?php echo $row['phone'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="addr">Address:<i class="fa fa-edit"></i></label>
                                        <textarea name="addr" id="addr" class="form-control" data-rule-required="true"
                                                  data-msg-required="*"><?php echo urldecode($row['address']) ?>"</textarea>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-md-offset-2">
                                        <label for="pin">PinCode:<i class="fa fa-edit"></i></label>
                                            <input type="digit" name="pin" id="pin" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*" value="<?php echo $row['pincode'] ?>"/>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label for="city">City:<i class="fa fa-edit"></i></label>
                                            <input type="text" name="city" id="city" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*" value="<?php echo $row['city'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-md-offset-2">
                                        <label for="state">State:<i class="fa fa-edit"></i></label>
                                            <input type="text" name="state" id="state" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*" value="<?php echo $row['state'] ?>"/>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label for="country">Country:<i class="fa fa-edit"></i></label>
                                            <input type="text" name="country" id="country" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*" value="<?php echo $row['country'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mt-20">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="form-control btn-theme-colored">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                    if (isset($_REQUEST['e'])) {
                        if ($_REQUEST['e'] == 1) {
                            echo "<div class='alert alert-success'>Updated successfully</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Error updating the profile</div>";
                        }
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include 'footer.html';
include 'footer_scripts.html'; ?>
</body>
</html>

