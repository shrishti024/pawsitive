<html lang="en">
<head>
    <title>Appointment</title>
    <?php include 'headerfiles.html'; ?>
</head>
<body>
<span class="dark"><?php include "user_header.php" ?></span>
<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg"
         style="height:50vh;">
    <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title">Vet Details</h2>
                    <ol class="breadcrumb text-center text-black mt-10">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active text-theme-colored">Book Appointment</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "connection.php";
$email = $_REQUEST['p'];
$select = "select * from vet where email='$email'";
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
                    <div class="vet">
                        <div class="col-md-5">
                            <div class="vet-image">
                                <img src="<?php echo $row['photo'] ?>" alt="" class="img img-thumbnail"
                                     style="height:20em;width:100%">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="vet-summary">
                                <h2 class="category"><?php echo $row['name'] ?></h2>
                                <div class="degree">
                                    <ins class="text-theme-colored"><?php echo $row['degree'] ?></span></ins>
                                </div>
                                <div class="phone">
                                    <strong>Contact:</strong> <?php echo $row['phone'] ?>
                                </div>
                                <div class="address">
                                    <strong>Address:</strong> <?php echo $row['address'] ?>
                                </div>
                                <div class="fees">
                                    <strong>Fees:</strong><span>&#x20B9</span><?php echo $row['fee'] ?>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-8">
                                        <label><strong>OPD Hours:</strong> </label>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <label for="morning">Morning Slot:</label>
                                        <?php echo $mrng = $row['morning'] ?>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="evening">Evening Slot:</label>
                                        <?php echo $eve = $row['evening'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $vemail = $row['email'];
                            }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-bg-img="images/pattern/p4.png">
        <div class="container">
            <div class="col-md-8 col-md-offset-2">
                <h2 class="text-gray-darkgray mt-0 line-height-1 text-center">Book<span
                            class="text-theme-colored"> an Appointment</span></h2>
                <hr>
                <form class="mt-30" method="post"
                      action="appointment_formAction.php?q=<?php echo $vemail ?>">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 ">
                            <div class="mb-10">
                                <label for="email">Email:</label>
                                <span class="form-control"><?php echo $_SESSION['user'] ?></span>
                                <input type="hidden" id="email" name="email" class="form-control"
                                       value="<?php echo $_SESSION['user'] ?>">
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 ">
                            <div class="form-group mb-10">
                                <label for="name">Dog Name:</label>
                                <input name="name" class="form-control" type="text" required=""
                                       placeholder="Enter Name" data-rule-required="true"
                                       data-msg-required="*">
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 ">
                            <div class="form-group mb-10">
                                <label for="phone">Contact Number:</label>
                                <input name="phone" class="form-control required"
                                       type="text"
                                       data-rule-required="true" data-msg-required="*">
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 ">
                            <div class="form-group mb-10">
                                <label for="date">Appointment Date:</label>
                                <input type="date" name="date" onchange="getimeslot('<?php echo $email ?>',this.value)"
                                       placeholder="dd-mm-yyyy"
                                       class="form-control"
                                       data-rule-required="true" data-msg-required="*">
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 ">
                            <label for="time">Available Time Slot:</label>
                            <div id="timeslot">
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 ">
                            <div class="form-group mb-10">
                                <label for="symptoms">Symptoms:</label>
                                <textarea name="message" class="form-control required" rows="5"
                                          data-rule-required="true" data-msg-required="*"></textarea>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 ">
                            <div class="form-group mb-0 mt-20">
                                <button type="submit" name="status" class="btn btn-theme-colored form-control" value="requested">Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
</div>
</body>
<?php
include 'footer.html';
include 'footer_scripts.html' ?>
<script>
    function getimeslot(vet, dt) {
        if(vet!="" && dt!=""){
            var http = new XMLHttpRequest();
            http.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("timeslot").innerHTML=this.response;
                }
            }
            http.open("get", "getimeslot.php?q=" + vet + "&d=" + dt, true);
            http.send();
        }
        else{
            alert("select Appointment Date first");
        }
    }
</script>
</html>






