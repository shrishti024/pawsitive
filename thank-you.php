<html lang="en">

<head>
    <title>Thank You Page</title>
    <?php include "headerfiles.html" ?></head>
<body>
<span class="dark"><?php include "user_header.php"; ?></span>
<div class="">
    <section class="layer-overlay overlay-dark-7" data-bg-img="images/pattern/p8.jpg">
        <div class=" d-flex justify-content-center align-items-center" style="height:70vh">
            <div class="col-md-6 col-md-offset-3 mt-20">
                <div class="border border-3 border-success"></div>
                <div class="card bg-deep-transparent hvr-box-shadow-outset">
                    <div class="mb-2 text-center bg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-theme-colored bi bi-check-circle" width="75"
                             height="75"
                             fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path
                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg>
                    </div>
                    <div class="text-center">
                        <h2><span class="text-white">Order Booked Successfully!</span></h2>
                        <p class="text-dark">Thank you for your order from Pawsitive! We appreciate your patronage and
                            look forward to providing you and your furry friend with a great experience</p>
                        <a href="user_home.php">
                            <button class="btn btn-theme-colored">Back Home</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
<?php include "footer.html";
include "footer_scripts.html" ?>
</html>