<!doctype html>
<html lang="en">
<head>
    <title>Products</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include "seller_header.php" ?></span>
<div class="">
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay " data-bg-img="images/bg/bg11.jpeg"
                 style="background-size: cover; background-position: center center; height: 70vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">Add Product for Sale</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Add Product</span>
                                for Sale</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="product_formAction.php" method="post" enctype="multipart/form-data"
                                  class="product_sale-form-transparent"
                                  id="seller-form">
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label for="category">Category:</label>
                                            <select name="category" id="category" class="form-control"
                                                    data-rule-required="true"
                                                    data-msg-required="*">
                                                <option value="">Select</option>
                                                <?php
                                                include 'connection.php';
                                                $select = 'select * from category';
                                                $res = mysqli_query($conn, $select);
                                                while ($row = mysqli_fetch_array($res)) {
                                                    ?>
                                                    <option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                       data-rule-required="true" data-msg-required="*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-8 col-md-offset-2">
                                            <label for="price">Price:(&#x20B9)</label>
                                            <input type="text" name="price" class="form-control" placeholder="Price"
                                                   id="price"
                                                   data-rule-required="true" data-msg-required="*">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-8 col-md-offset-2">
                                            <label for="photo1">Photo1</label>
                                            <input type="file" name="photo1" id="photo1" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-8 col-md-offset-2">
                                            <label for="photo2">Photo2</label>
                                            <input type="file" name="photo2" id="photo2" class="form-control"
                                                   data-rule-required="true"
                                                   data-msg-required="*">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-8 col-md-offset-2">
                                            <label for="description">Description:</label>
                                        <textarea name="desc" id="description" rows="5" class="form-control" data-rule-required="true"
                                                  data-msg-required="*">
                                        </textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-20">
                                        <div class="col-md-8 col-md-offset-2">
                                            <button type="submit" class="btn btn-theme-colored form-control">Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        if (isset($_REQUEST['e'])) {
            if ($_REQUEST['e'] == 1) {
                echo '<div class="alert alert-success">Record Added Successfully</div>';
            } elseif ($_REQUEST['e'] == 2) {
                echo '<div class="alert alert-danger">Invalid photo type</div>';
            }
        }
        ?>
        <?php include 'footer.html';
        include 'footer_scripts.html';
        ?>
</body>
</html>





