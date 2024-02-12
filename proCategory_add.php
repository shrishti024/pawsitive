<!doctype html>
<html lang="en">
<head>
    <title>Product Category</title>
    <?php include 'headerfiles.html' ?>
</head>
<body>
<span class="dark"><?php include 'admin_header.php' ?></span>
<div class="">
    <section class="inner-header divider parallax layer-overlay overlay-white-3" data-bg-img="images/bg/bg10.jpeg"
             style="background-size: cover; background-position: center center; height: 70vh;">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                            <li><a href="index.php">Home</a></li>
                            <li class="active text-theme-colored">Add Product Category</li>
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
                        <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Add</span>
                            Product Category</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form action="proCategory_addAction.php" method="post"
                              class="product_category-form-transparent"
                              id="admin-form">
                            <div class="row mb-2">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="category">Product Category:</label>
                                    <input type="text" name="category" class="form-control" placeholder="Category"
                                           id="category"
                                           data-rule-required="true" data-msg-required="*">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="desc">Description:</label>
                                    <textarea name="desc" class="form-control" placeholder="Description"
                                           id="desc"
                                              data-rule-required="true" data-msg-required="*"></textarea>
                                </div>
                            </div>
                            <div class="row mt-20">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-theme-colored form-control">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
                if (isset($_REQUEST['e'])) {
                    if ($_REQUEST['e'] == 1) {
                        echo "<div class='alert alert-success'>Data Recorded Successfully</div>";
                    }
                }
                ?>
            </div>
        </div>
    </section>

</div>
</body>
<?php include 'footer.html';
include "footer_scripts.html" ?>
</html>
