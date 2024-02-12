<?php
session_start();
if (is_null($_SESSION['seller'])) {
    header("location:seller_login.php");
}
?>

<div id="preloader">
    <div id="spinner" class="spinner large-icon">
        <img alt="" src="images/preloaders/13.gif">
        <h5 class="line-height-1 font-18">Loading...</h5>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
</div>

<!-- Header -->
<header class="header">
    <div class="header-top bg-theme-colored sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5">

                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget no-border m-0">
                        <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-right flip sm-pull-none sm-text-center mt-sm-15">
                            <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
                <nav id="menuzord-right" class="menuzord green no-bg">
                    <a class="menuzord-brand pull-left flip" href="javascript:void(0)"><img
                                src="images/PAWsitiveLogo.png" alt=""></a>
                    <ul class="menuzord-menu">
                        <li class="active"><a href="seller_home.php">Home</a></li>
                        <li><a href="#">Dogs</a>
                            <ul class="dropdown">
                                <li><a href="dog_form.php">Add Dog for sale</a></li>
                                <li><a href="dog_view.php">View Dogs</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Products</a>
                            <ul class="dropdown">
                                <li><a href="product_form.php">Add Product for sale</a></li>
                                <li><a href="product_view.php">View Products</a></li>
                                <li><a href="seller_viewProductOrders.php">View Product Oders</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-user"></i></a>
                            <ul class="dropdown">
                                <li><a href="seller_profile.php">My Profile</a></li>
                                <li><a href="seller_changePassword.php">Change Password</a></li>
                                <li><a href="seller_logout.php?q=seller">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
