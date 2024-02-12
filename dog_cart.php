<!doctype html>
<html lang="en">
<head>
    <title>Dog Cart</title>
    <?php include 'headerfiles.html' ?>
</head>
<body>
<span class="dark"><?php include 'user_header.php' ?></span>
<div id="wrapper" class="clearfix">

    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay" data-bg-img="images/bg/bg12.jpg"
                 style="background-size: cover; background-position: center center; height:70vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Shop Cart</h2>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active text-theme-colored">Shop Cart</li>
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
                        <div class="col-md-8 col-md-offset-2 ">
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Cart</span> Items
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <?php
                include "connection.php";
                $select = "select * from dog_cart where user_email='" . $_SESSION['user'] . "'";
                $res = mysqli_query($conn, $select);
                ?>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered tbl-shopping-cart">
                        <thead>
                        <tr>
                            <th>Sr.No.</th>
                            <th>Photo</th>
                            <th>Item</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $gt=0;
                        if (mysqli_num_rows($res)) {
                            $i = 1;
                            while ($row = mysqli_fetch_array($res)) {
                                ?>
                                <tr class="cart_item">
                                    <td><?php echo $i ?></td>
                                    <td><img src="<?php echo $row['photo'] ?>" width="25%" height="25%" alt="No Image">
                                    </td>
                                    <td><?php echo $row['breed'] ?></td>
                                    <td><span class="">&#x20B9 <?php echo $row['price'] ?></span></td>
                                    <td>
                                        <div class="quantity buttons_added">
                                            <input type="number" size="4" class="input-text qty text" title="Qty"
                                                   value=<?php echo $row['quantity'] ?>
                                                   name="quantity" >
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">&#x20B9 <?php echo $row['price'];
                                    $gt+= ($row['quantity']* $row['price']);
                                    ?></span></td>
                                    <td><a href="dog_cartDelete.php?q=<?php echo $row[0] ?>">
                                            <button type="button" onclick="return confirm('Are you sure?')"
                                                    class="btn btn-danger">
                                                <i class="fa fa-trash"></i></button>
                                        </a></td>
                                </tr>

                                <?php
                                $i++;
                            }
                            ?>
                            <tr>
                                <th colspan="5" class="text-right bold">Grand Total:</th> <td> &#x20b9; <?php echo $gt; ?></td>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-right"><a href="dog_checkout.php"><button class="btn btn-primary">Proceed to Checkout</button> </a> </th>
                            </tr>
                        <?php
                        } else {
                            echo "<tr class='alert alert-danger'>
            <td colspan='7'>No Data Found</td>
            </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
</body>
<?php include 'footer.html';
include 'footer_scripts.html' ?>
</html>

