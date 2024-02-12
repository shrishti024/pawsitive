<!doctype html>
<html lang="en">
<head>
    <title>Change Password</title>
    <?php
    include "headerFiles.html";
    ?>
</head>
<body>
<span class="dark"><?php include 'user_header.php'?></span>
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
                                <li class="active text-theme-colored" >Change Password</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Change</span> Password</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2" >
                    <form action="user_changePasswordAction.php" method="post" class="user_changePassword-form-transparent" id="user-form">
                        <div class="row mb-4">
                            <div class="col-md-8 col-md-offset-2" >
                                <label for="email">Email:</label>
                                <span class="form-control"><?php echo $email = $_SESSION['user']; ?></span>
                                <input type="hidden" id="email" name="email" class="form-control"
                                       data-rule-required='true' value=<?php echo "$email" ?>>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-8 col-md-offset-2" >
                                <label for="password">Old Password</label>
                                <input type="password" id="password" name="password" class="form-control"
                                       data-rule-required='true'>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-8 col-md-offset-2" >
                                <label for="password1">New Password</label>
                                <input type="password" id="password1" name="newpassword" class="form-control"
                                       data-rule-required='true'>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-8 col-md-offset-2" >
                                <label for="confirmpassword">Confirm Password</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" class="form-control "
                                       data-rule-equalto="#password1">
                            </div>
                        </div>
                        <div class="row mt-20">
                            <div class="col-md-8 col-md-offset-2" >
                                <button type="submit" class="form-control btn btn-theme-colored">Submit</button>
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
        echo "<div class='alert alert-success'>Password Updated!</div>";
    } elseif ($_REQUEST['e'] == 2) {
        echo "<div class='alert alert-danger'>New Password can't be same as the old password!</div>";
    } elseif ($_REQUEST['e'] == 3) {
        echo "<div class='alert alert-danger'>New Password and Confirm Password does not match!</div>";
    } elseif ($_REQUEST['e'] == 4) {
        echo "<div class='alert alert-danger'>Invalid Old Password!</div>";
    }
}
?>
<?php
include 'footer.html';
include 'footer_scripts.html';
?>
</body>
</html>
