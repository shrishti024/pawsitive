<!doctype html>
<html lang="en">
<head>
    <title>Update Prouct Information</title>
    <?php include "headerFiles.html" ?>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<span class="dark"><?php include "seller_header.php" ?></span>
<?php
include "connection.php";
$product = $_REQUEST['q'];
$select = "select * from product where pro_id=$product  ";
$res = mysqli_query($conn, $select);
$row = mysqli_fetch_array($res);
?>
<div class="">
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay overlay-white-3" data-bg-img="images/bg/bg2.jpg"
                 style="background-size: cover; background-position: center center; height: 70vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">Dog Details</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Product</span>
                                Update
                                Information
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="product_updateAction.php?p=<?php echo $product ?>" method="post"
                                  enctype="multipart/form-data" class="dog_update-form-transparent"
                                  id="seller-form">
                                <div class="row mb-2">
                                    <div class="col-md-8  col-md-offset-2">
                                        <label for="category">Category:</label><br>
                                        <span class="form-control"><?php echo $row['category'] ?></span>
                                        <input type="hidden" name="category" id="category" class="form-control"
                                               value="<?php echo $row['category'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8  col-md-offset-2">
                                        <label for="name">Product Name:<i class="fa fa-edit"></i></label><br>
                                        <input type="text" name="name" id="name" class="form-control"
                                               value="<?php echo $row['pro_name'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8  col-md-offset-2">
                                        <label for="desc">Description:<i class="fa fa-edit"></i></label>
                                        <textarea name="desc" id="desc" class="form-control" rows="5" data-rule-required="true"
                                                  data-msg-required="*">
                                       <?php echo urldecode($row['description']) ?> </textarea>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="price">Price:(&#x20B9)<i class="fa fa-edit"></i></label>
                                        <input type="text" name="price" class="form-control" placeholder="Price"
                                               id="price" value="<?php echo $row['price'] ?>"
                                               data-rule-required="true" data-msg-required="*">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="photo1">Photo1<i class="fa fa-edit"></i></label>
                                        <img src="<?php echo $row['photo1'] ?>" height="70" width="70" alt="No Image"/>
                                        <input type="file" name="photo1" id="photo1" class="form-control"
                                               value="<?php echo $row['photo1'] ?>">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="photo2">Photo2<i class="fa fa-edit"></i></label>
                                        <img src="<?php echo $row['photo2'] ?>" height="70" width="70" alt="No Image"/>
                                        <input type="file" name="photo2" id="photo2" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-20">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn btn-theme-colored form-control">Submit</button>
                                    </div>
                                </div>
                                <?php
                                if (isset($_REQUEST['e'])) {
                                    if ($_REQUEST['e'] == 1) {
                                        echo "<div class='alert alert-success'>Updated successfully</div>";
                                    } elseif ($_REQUEST['e'] == 2) {
                                        echo '<div class="alert alert-danger">Invalid photo type</div>';
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

