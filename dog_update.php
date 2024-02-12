<!doctype html>
<html lang="en">
<head>
    <title>Update Dog Information</title>
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
$dog = $_REQUEST['q'];
$select = "select * from dog where dog_id=$dog  ";
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
                            <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Dog</span> Update
                                Information
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="dog_updateAction.php?p=<?php echo $dog ?>" method="post" enctype="multipart/form-data" class="dog_update-form-transparent"
                                  id="seller-form">
                                <div class="row mb-2">
                                    <div class="col-md-8  col-md-offset-2">
                                        <label for="breed">Breed:</label><br>
                                        <span class="form-control"><?php echo $row['breed'] ?></span>
                                        <input type="hidden" name="breed" id="breed" class="form-control"
                                               value="<?php echo $row['breed'] ?>"/>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8  col-md-offset-2">
                                        <label for="desc">Description:<i class="fa fa-edit"></i></label>
                                        <textarea name="desc" id="desc" class="form-control" data-rule-required="true"
                                                  data-msg-required="*">
                                       <?php echo urldecode($row['description'])  ?> </textarea>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2">
                                    <label for="gender">Gender:<i class="fa fa-edit "></i></label>
                                    <div class="form-check-inline">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="male" <?php if ($row['gender'] == "male") echo "checked" ?>>
                                        <label for="male">Male</label>
                                        <span class="col-md-offset-1">
                                        <input type="radio" name="gender" id="gender" class="form-check-inline"
                                               value="female" <?php if ($row['gender'] == "female") echo "checked" ?>>
                                                <label for="female">Female</label></span>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-4 col-md-offset-2 ">
                                        <label for="Age">Age:<i class="fa fa-edit"></i></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="age" name="age"
                                                   value="<?php echo $row['age'] ?> " data-rule-required="true"
                                                   data-msg-required="*">
                                            <div class="input-group-append">
                                                <select name="age_type" id="age type" class="form-control">
                                                    <option value="<?php echo $row['age_type'] ?>"><?php echo $row['age_type'] ?></option>
                                                    <option value="days">Days</option>
                                                    <option value="weeks">Weeks</option>
                                                    <option value="months">Months</option>
                                                    <option value="years">Years</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <label for="weight">Weight:<i class="fa fa-edit"></i></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="weight" name="weight"
                                                   value="<?php echo $row['weight'] ?> " data-rule-required="true"
                                                   data-msg-required="*">
                                            <div class="input-group-append">
                                                <select name="unit" id="weight" class="form-control">
                                                    <option value="<?php echo $row['weighttype'] ?>"><?php echo $row['weighttype'] ?></option>
                                                    <option value="kg">Kg</option>
                                                    <option value="g">grams</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="color">Color:<i class="fa fa-edit"></i></label>
                                        <select name="color" id="color" class="form-control" data-rule-required="true"
                                                data-msg-required="*">
                                            <option value="<?php echo $row['color'] ?>"><?php echo $row['color'] ?></option>
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
                                        <input type="file" name="photo2" id="photo2" class="form-control"  >
                                    </div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-md-8 col-md-offset-2">
                                        <label for="photo3">Photo3<i class="fa fa-edit"></i></label>
                                        <img src="<?php echo $row['photo3'] ?>" height="70" width="70" alt="No Image"/>
                                        <input type="file" name="photo3" id="photo2"
                                               value="<?php echo $row['photo3'] ?>"
                                               class="form-control">
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
                                    }
                                    elseif ($_REQUEST['e'] == 2) {
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
