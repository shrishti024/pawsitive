<?php
session_start();
if(is_null($_SESSION['admin'])) {
    header("location:admin_login.php");
}
?>
<!--<nav class="navbar navbar-expand-lg navbar-light bg-primary-subtle">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PAWsitive</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admins
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="admin_add.php">Add new admin</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="admin_view.php">View Admins</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Users
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="user_view.php">View Users</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Settings
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="admin_changePassword.php">Change Password</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="admin_logout.php?q=admin">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Sellers
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="seller_view.php">View Sellers</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Breeds
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="breed_add.php">Add new breeds</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="breed_view.php">View Breeds</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>-->


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
                    <a class="menuzord-brand pull-left flip" href="javascript:void(0)"><img src="images/PAWsitiveLogo.png" alt=""></a>
                    <ul class="menuzord-menu">
                        <li class="active"><a href="admin_home.php">Home</a> </li>
                        <!--<li><a href="#">Features</a>
                                                    <ul class="dropdown">
                                                        <li><a href="features-preloader.html">Preloaders</a></li>
                                                        <li><a href="#">Header</a>
                                                            <ul class="dropdown">
                                                                <li><a href="features-header-style1.html">Header Style1</a></li>
                                                                <li><a href="features-header-style2.html">Header Style2</a></li>
                                                                <li><a href="features-header-style3.html">Header Style3</a></li>
                                                                <li><a href="features-header-style4.html">Header Style4</a></li>
                                                                <li><a href="features-header-style5.html">Header Style5</a></li>
                                                                <li><a href="features-header-style6.html">Header Style6</a></li>
                                                                <li><a href="features-header-style7.html">Header Style7</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Page Title</a>
                                                            <ul class="dropdown">
                                                                <li><a href="features-page-title-text-left.html">Text Left</a></li>
                                                                <li><a href="features-page-title-text-center.html">Text Center</a></li>
                                                                <li><a href="features-page-title-text-right.html">Text Right</a></li>
                                                                <li><a href="features-page-title-mini-version.html">Mini Version</a></li>
                                                                <li><a href="features-page-title-big-version.html">Big Version</a></li>
                                                                <li><a href="features-page-title-extra-big-version.html">Extra Big Version</a></li>
                                                                <li><a href="features-page-title-bg-white.html">Bg White</a></li>
                                                                <li><a href="features-page-title-bg-image.html">Bg Image</a></li>
                                                                <li><a href="features-page-title-bg-image-parallax.html">Bg Image Parallax</a></li>
                                                                <li><a href="features-page-title-bg-video.html">Bg Video</a></li>
                                                                <li><a href="features-page-title-full-transparent.html">Full Transparent</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Side Push Panel</a>
                                                            <ul class="dropdown">
                                                                <li><a href="features-side-push-panel-left-overlay.html">Left Overlay</a></li>
                                                                <li><a href="features-side-push-panel-left-push.html">Left Push</a></li>
                                                                <li><a href="features-side-push-panel-right-overlay.html">Right Overlay</a></li>
                                                                <li><a href="features-side-push-panel-right-push.html">Right Push</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Form</a>
                                                            <ul class="dropdown">
                                                                <li><a href="#">Subscribe Form</a>
                                                                    <ul class="dropdown">
                                                                        <li><a href="form-subscribe.html">Form style 1</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Appointment Form</a>
                                                                    <ul class="dropdown">
                                                                        <li><a href="form-appointment-style1.html">Form style 1</a></li>
                                                                        <li><a href="form-appointment-style2.html">Form style 2</a></li>
                                                                        <li><a href="form-appointment-style3.html">Form style 3</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Job Apply Form</a>
                                                                    <ul class="dropdown">
                                                                        <li><a href="form-job-apply-style1.html">Form style 1</a></li>
                                                                        <li><a href="form-job-apply-style2.html">Form style 2</a></li>
                                                                        <li><a href="form-job-apply-style3.html">Form style 3</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Quick Contact Form</a>
                                                                    <ul class="dropdown">
                                                                        <li><a href="form-quick-contact-style1.html">Form style 1</a></li>
                                                                        <li><a href="form-quick-contact-style2.html">Form style 2</a></li>
                                                                        <li><a href="form-quick-contact-style3.html">Form style 3</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Paypal Form <span class="label label-success">New</span></a>
                                                            <ul class="dropdown">
                                                                <li><a href="#">Donation Onetime</a>
                                                                    <ul class="dropdown">
                                                                        <li><a href="form-paypal-donate-onetime-style1.html">Style1</a></li>
                                                                        <li><a href="form-paypal-donate-onetime-style2.html">Style2</a></li>
                                                                        <li><a href="form-paypal-donate-onetime-style3.html">Style3</a></li>
                                                                        <li><a href="form-paypal-donate-onetime-style4.html">Style4</a></li>
                                                                        <li><a href="form-paypal-donate-onetime-style5.html">Style5</a></li>
                                                                        <li><a href="form-paypal-donate-onetime-style6.html">Style6</a></li>
                                                                        <li><a href="form-paypal-donate-onetime-style7.html">Style7</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Donation Recurring</a>
                                                                    <ul class="dropdown">
                                                                        <li><a href="form-paypal-donate-recurring-style1.html">Style1</a></li>
                                                                        <li><a href="form-paypal-donate-recurring-style2.html"> Style2</a></li>
                                                                        <li><a href="form-paypal-donate-recurring-style3.html">Style3</a></li>
                                                                        <li><a href="form-paypal-donate-recurring-style4.html">Style4</a></li>
                                                                        <li><a href="form-paypal-donate-recurring-style5.html">Style5</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="#">Both Onetime/Recurring</a>
                                                                    <ul class="dropdown">
                                                                        <li><a href="form-paypal-donate-both-onetime-recurring-style1.html">Style1</a></li>
                                                                        <li><a href="form-paypal-donate-both-onetime-recurring-style2.html">Style2</a></li>
                                                                        <li><a href="form-paypal-donate-both-onetime-recurring-style3.html">Style3</a></li>
                                                                        <li><a href="form-paypal-donate-both-onetime-recurring-style4.html">Style4</a></li>
                                                                        <li><a href="form-paypal-donate-both-onetime-recurring-style5.html">Style5</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a href="form-paypal-cart-style1.html">Cart Payment</a></li>
                                                                <li><a href="form-paypal-order-style1.html">Order Payment Style1</a></li>
                                                                <li><a href="form-paypal-order-style2.html">Order Payment Style2</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Popup Promo Box</a>
                                                            <ul class="dropdown">
                                                                <li><a href="features-popup-promo-box.html">Default</a></li>
                                                                <li><a href="features-popup-promo-box-cookie-enabled.html">Cookie Enabled</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Footer</a>
                                                            <ul class="dropdown">
                                                                <li><a href="features-footer-style1.html#footer">Footer One</a></li>
                                                                <li><a href="features-footer-style2.html#footer">Footer Two</a></li>
                                                                <li><a href="features-footer-style3.html#footer">Footer Three</a></li>
                                                                <li><a href="features-footer-style4.html#footer">Footer Four</a></li>
                                                                <li><a href="features-footer-style5.html#footer">Footer Five</a></li>
                                                                <li><a href="features-footer-style6.html#footer">Footer Six</a></li>
                                                                <li><a href="features-footer-style7.html#footer">Footer Seven</a></li>
                                                                <li><a href="features-footer-style8.html#footer">Footer Eight</a></li>
                                                                <li><a href="features-footer-style9.html#footer">Footer Nine</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>-->
                        <li><a href="#">Admins</a>
                            <ul class="dropdown">
                                <li><a href="admin_add.php">Add new Admin</a></li>
                                <li><a href="admin_view.php">View Admins</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Users</a>
                            <ul class="dropdown">
                                <li><a href="user_view.php">View Users</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Sellers</a>
                            <ul class="dropdown">
                                <li><a href="seller_view.php">View Sellers</a></li>

                            </ul>
                        </li>
                        <li><a href="#">Dogs</a>
                            <ul class="dropdown">
                                <li><a href="breed_add.php">Add new Breed</a></li>
                                <li><a href="breed_view.php">View Breeds</a></li>
                                <li><a href="admin_dogView.php">View Dogs for sale</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Products</a>
                            <ul class="dropdown">
                                <li><a href="proCategory_add.php">Add Product Category</a></li>
                                <li><a href="proCategory_view.php">View Product Categories</a></li>
                                <li><a href="admin_productView.php">View Products for sale</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Vets</a>
                            <ul class="dropdown">
                                <li><a href="vet_view.php">View Vets</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-user"></i></a>
                            <ul class="dropdown">
                                <li><a href="admin_changePassword.php">Change Password</a></li>
                                <li><a href="admin_logout.php?q=admin">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>