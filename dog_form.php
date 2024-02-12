<!doctype html>
<html lang="en">
<head>
    <title>Dog Form</title>
    <?php include 'headerFiles.html' ?>
</head>
<body>
<span class="dark"><?php include "seller_header.php" ?></span>
<div class="">
    <div class="main-content">
        <section class="inner-header divider parallax layer-overlay " data-bg-img="images/bg/bg11.jpeg"
                 style="background-size:cover; background-position: center center; height: 70vh;">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ol class="breadcrumb text-center text-black mt-10 text-uppercase">
                                <li><a href="index.php">Home</a></li>
                                <li class="active text-theme-colored">Add Dog for Sale</li>
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Add Dog</span>
                                for Sale</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="dog_formaction.php" method="post" enctype="multipart/form-data"
                                  class="dog_sale-form-transparent"
                                  id="seller-form">
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="breed">Breed:</label>
                                        <select name="breed" id="breed" class="form-control" data-rule-required="true"
                                                data-msg-required="*">
                                            <option value="">Select</option>
                                            <?php
                                            include 'connection.php';
                                            $select = 'select * from breed';
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
                                    <div class="col-md-8  col-md-offset-2">
                                        <label for="desc">Description:</label>
                                        <textarea name="desc" id="desc" class="form-control" rows="5" data-rule-required="true"
                                                  data-msg-required="*">
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="gender">Gender:</label>
                                    <div class="form-check-inline">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="male">
                                        <label for="male">Male</label>
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="female">
                                        <label for="female">Female</label>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-md-offset-2 ">
                                        <label for="Age">Age:</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="age" name="age"
                                                   data-rule-required="true" data-msg-required="*">
                                            <div class="input-group-append">
                                                <select name="age_type" id="age type" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="days">Days</option>
                                                    <option value="weeks">Weeks</option>
                                                    <option value="months">Months</option>
                                                    <option value="years">Years</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label for="weight">Weight:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="weight" name="weight"
                                                   data-rule-required="true" data-msg-required="*">
                                            <div class="input-group-append">
                                                <select name="unit" id="weight" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="kg">Kg</option>
                                                    <option value="g">grams</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="color">Color:</label>
                                        <select name="color" id="color" class="form-control" data-rule-required="true"
                                                data-msg-required="*">
                                            <option value="">Select</option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="brown">Brown</option>
                                            <option value="golden">Golden</option>
                                            <option value="red">Red</option>
                                        </select>
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
                                        <label for="photo3">Photo3</label>
                                        <input type="file" name="photo3" id="photo2" class="form-control"  data-rule-required="true"
                                               data-msg-required="*">
                                    </div>
                                </div>

                                <div class="row mt-20">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn btn-theme-colored form-control" name="status"
                                                value="unsold">Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
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





