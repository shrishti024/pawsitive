<html lang="en">
<head>
    <title>Product Details</title>
    <?php include 'headerfiles.html' ?>
</head>
<body>
<span class="dark"><?php include "user_header.php" ?></span>
<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg" style="background-size: cover; background-position: center center; height: 50vh;">
    <div class="container pt-60 pb-60">
<!-- Section Content -->
<div class="section-content">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="title">Product Details</h2>
            <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active text-theme-colored">Product Details</li>
            </ol>
        </div>
    </div>
</div>
</div>
</section>
<?php
include "connection.php";
$id = $_REQUEST['q'];
$select = "select * from product where pro_id='$id'";
$res = mysqli_query($conn, $select);
?>
<div class="main-content">
    <?php
    if (mysqli_num_rows($res)) {
    while ($row = mysqli_fetch_array($res)) {
    ?>
    <section>
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="product">
                        <div class="col-md-5">
                            <div class="product-image">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="<?php echo $row['photo1'] ?>" height="250" width="100%"/>
                                    </div>
                                </div>
                                <div class="row mt-15">
                                    <div class="col-md-6">
                                        <img src="<?php echo $row['photo2'] ?>" height="150" width="100%"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="product-summary">
                                <h2 class="category"><?php echo $row['pro_name'] ?></h2>

                                <div class="price">
                                    <ins class="text-theme-colored">&#x20B9<span
                                                class="amount"><?php echo $row['price'] ?></span></ins>
                                </div>
                                <div class="short-description">
                                    <?php
                                    $cat = $row['category'];
                                    $cselect = 'select description from category where category="' . $cat . '"';
                                    $cres = mysqli_query($conn, $cselect);
                                    $crow = mysqli_fetch_array($cres);
                                    ?>
                                    <p><?php echo urldecode($crow['description']) ?> </p>
                                </div>
                                <div class="category">
                                    <strong>Category:</strong> <?php echo $row['category'] ?>
                                </div>
                                <div class="cart-form-wrapper mt-30">
                                    <div class="row-col-md-4 mt-20">
                                        <a href="product_addCart.php?p=<?php echo $row['pro_id'] ?>" class="btn btn-link">
                                        <button class="single_add_to_cart_button btn btn-theme-colored" type="submit">
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="horizontal-tab product-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1">
                                        <h3>Product Description</h3>
                                        <p><?php echo urldecode($row['description']) ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<?php
include 'footer.html';
include 'footer_scripts.html' ?>
</html>






