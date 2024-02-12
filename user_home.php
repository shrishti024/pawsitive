<!doctype html>
<html lang="en">
<head>
    <title>User Home</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark">
    <?php include 'user_header.php' ?></span>
<div class="main-content">
    <section class="inner-header divider parallax layer-overlay" data-bg-img="images/bg/bg12.jpg"
             style="background-size: cover; background-position: center center; height: 65vh;">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Shop</h2>
                        <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                            <li><a href="index.php">Home</a></li>
                            <li class="active text-theme-colored">User Home</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layer-overlay overlay-dark-7" data-bg-img="images/pattern/pt19.jpg">
        <div class="container pb-17">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-white mt-0 line-height-1">Pet for<span class="text-theme-colored"> Sale</span>
                        </h2>
                    </div>
                </div>
            </div>
            <?php
            include 'connection.php';
            $select = 'select * from dog where status="unsold"';
            $res = mysqli_query($conn, $select);
            ?>
            <div class="container">
                <?php
                if (mysqli_num_rows($res)) { ?>
                    <div class="row mb-2">
                        <?php
                        while ($row = mysqli_fetch_array($res)) { ?>
                            <div class="col-md-3 me-6 mb-2">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="<?php echo $row['photo1'] ?>" class="rounded"
                                             style="height:20em;width:100%;">

                                    </div>
                                    <div class="card-body ">
                                        <h6><span class="text-white"> <?php echo $row['breed'] ?></span></h6>
                                        <h5><i class="fa fa-indian-rupee-sign"></i><span
                                                    class="text-white">&#x20B9 <?php echo $row['price'] ?> </span></h5>
                                        <a class="text-end text-black-333"
                                           href="dog_description.php?q=<?php echo $row['dog_id'] ?>"><br><span
                                                    class="text-white">View More</span></a>
                                    </div>
                                    <div class="card-footer">
                                        <a href="dog_addCart.php?d=<?php echo $row['dog_id'] ?>" class="btn btn-link">
                                            <button class="btn btn-theme-colored"><i class="fa fa-cart-plus"></i> Add to
                                                Cart
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } ?>
                    </div>
                    <?php
                }
                if(isset($_REQUEST['q'])){
                    if($_REQUEST['q']==1){
                        echo "<div class='alert alert-danger'>This Dog is already in someone's cart.</div>";
                    }
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php include "footer.html";
include "footer_scripts.html"; ?>
</body>
</html>




