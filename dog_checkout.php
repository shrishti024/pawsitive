<!doctype html>
<html lang="en">
<head>
    <title>Checkout</title>
    <?php include "headerFiles.html" ?>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
<span class="dark"><?php include "user_header.php" ?></span>
<div class="container mb-5">
    <h2>Checkout</h2>
    <form id="checkout-form" class="mb-5" action="dog_checkoutAction.php">
        <div class="col-md-8 col-md-offset-2">
            <div class="billing-details">
                <h3 class="mb-30">Billing Details</h3>
                <hr>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <label for="fname">Full Name:</label>
                        <input  id="fname" name="fname" type="text" class="form-control"
                               placeholder="Full Name" data-rule-required="true" data-msg-required="*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <label for="phone">Phone:</label>
                        <input id="phone" name="phone" type="text" class="form-control"
                               placeholder="Phone No:" data-rule-required="true" data-msg-required="*">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input id="address" name="address" type="text" class="form-control"
                                   placeholder="Street address"  data-rule-required="true" data-msg-required="*">
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-4 col-md-offset-2">
                        <label for="city">City</label>
                        <input type="text" id="city" name="city" class="form-control" placeholder="City"  data-rule-required="true" data-msg-required="*">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="zip">Zip/Postal Code</label>
                        <input type="text" id="zip" name="zip" class="form-control"
                               placeholder="Zip/Postal Code"  data-rule-required="true" data-msg-required="*">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-8 col-md-offset-2">
                        <label for="state">State</label>
                        <select class="form-control" id="state" name="state"  data-rule-required="true" data-msg-required="*">
                            <option>Select State</option>
                            <option>Punjab</option>
                            <option>Haryana</option>
                            <option>Delhi</option>
                            <option>Rajasthan</option>
                            <option>Gujarat</option>

                        </select>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h3>Your order</h3>
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
                    $gt = 0;
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
                                               name="quantity">
                                    </div>
                                </td>
                                <td class="product-subtotal"><span class="amount">&#x20B9 <?php echo $row['price'];
                                        $gt += ($row['quantity'] * $row['price']);
                                        ?></span></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                        <tr>
                            <th colspan="5" class="text-right bold">Grand Total:</th>
                            <td> &#x20b9; <?php echo $gt; ?>
                            <input type="hidden" id="gt" value="<?php echo $gt; ?>"/>
                            </td>
                        </tr>
                        <?php
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <h3>Payment Information</h3>
            <div class="payment-method">
                <div class="checkbox-inline">
                    <label>
                        <input type="radio" name="payment" value="cod">
                        Cash on delivery </label>
                    <label>
                        <input type="radio" name="payment" value="online payment" onclick="PayNow()">
                        Online Payment </label>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="text-left">
                <button type="submit" class="btn btn-theme-colored">Place Order</button>
            </div>
        </div>
    </form>

</div>
<?php
include 'footer.html';
include 'footer_scripts.html' ?>
<script>
    const PayNow = () => {
        let amount = document.getElementById("gt").value;
        // console.log(amount);

        let options = {
            key: "rzp_test_dRWiKHS7zr2Gki",
            amount: amount * 100,
            name: "Pawsitive",
            description: "Payment Gateway",
            image:
                "images/PAWsitiveLogo.png",
            handler: function (response) {
                RazorPayResponse(response);
            },
            prefill: {
                name: "",
                email: "",
            },
            notes: {
                address: "",
            },
            theme: {
                color: "#942436",
            },
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
    };

    const RazorPayResponse = (response) => {
        if (response.razorpay_payment_id !== "") {
            console.log(response.razorpay_payment_id);
            var fname=document.getElementById("fname").value;
            var address=document.getElementById("address").value;
            var city=document.getElementById("city").value;
            var zip=document.getElementById("zip").value;
            var state=document.getElementById("state").value;
            var gt=document.getElementById("gt").value;
            window.location.href="dog_checkoutAction.php?fname="+fname+"&address="+address+"&city="+city+"&zip="+zip+"&state="+state+"&payment=online";
        } else {
            alert("Payment Failed");
        }
    };

</script>
</body>
</html>

