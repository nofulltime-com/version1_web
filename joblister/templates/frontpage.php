<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        <?php include "../templates/inc/css/main2.css" ?><?php include "../templates/inc/css/narrow.css" ?><?php include "../templates/inc/css/main.css" ?><?php include "../templates/inc/css/bootstrap.css" ?><?php include "../templates/inc/css/linearicons.css" ?><?php include "../templates/inc/css/font-awesome.min.css" ?><?php include "../templates/inc/css/magnific-popup.css" ?><?php include "../templates/inc/css/nice-select.css" ?><?php include "../templates/inc/css//owl.carousel.css" ?><?php include "../templates/inc/css/animate.min.css" ?>
    </style>
</head>

<body>
    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a style="color:white ;font-size: x-large;font-weight:bold" href="../index.php"><span><i class="fas fa-dove"></i></span> Nofulltime</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="../index.php">Home</a></li>

                        <li><a href="../about-us.php">About Us</a></li>
                        <li><a href="../blog-home.php">Blogs</a></li>
                        <li><a href="../contact.php">Contact</a></li>

                        <?php
                        if (isset($_SESSION['id'])) { ?>
                            <li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                                <i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
                                <ul>
                                    <li><a href="../profile/index.php">Profile</a></li>
                                    <li><a href="../seeker_preferences.php">Edit</a></li>
                                    <li><a href="../logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php } elseif (isset($_SESSION['recruiter_id'])) { ?>
                            <li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                                <i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
                                <ul>
                                    <li><a href="../recruiters.php">Dashboard</a></li>
                                    <li><a href="../price.php">Subscribe</a></li>
                                    <li><a href="../search.php">Search</a></li>
                                    <li><a href="../recruiter_logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="menu-has-children" style="background-color:white"><a href="" style='color:#7b63f1'>Signup</a>
                                <ul>
                                    <li><a href="./Register/studentRegister.php">As a Student</a></li>
                                    <li><a href="./Register/recruiterRegister.php">As a recruiter</a></li>
                                </ul>
                            </li>
                            <li class="menu-has-children" style="background-color:white"><a href="" style='color:#7b63f1'>Login</a>
                                <ul>
                                    <li><a href="./Register/studentLogin.php">As a Student</a></li>
                                    <li><a href="./Register/recruiterLogin.php">As a recruiter</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header --><br><br><br><br>
    <div class="container">
        <div class="head clearfix">
            <div class="head">
                <ul class="head head-pills pull-right">
                    <li role="presentation" style=background-color:#49e4fa;border-radius:20px;><a href="index.php">Home</a></li>
                    <li role="presentation" style=background-color:#49e4fa;border-radius:20px;><a href="create.php">Create Listing</a></li>
                </ul>
            </div>
            <h3 class="text-muted" style=font-size:35px;><?php echo SITE_TITLE; ?></h3>
        </div>
        <hr />
        <?php displayMessage(); ?>

        <h3 style=font-size:25px;color:#6f42c1;font-weight:500;><?php echo $title; ?></h3>
        <?php foreach ($jobs as $job) : ?>
            <div class="row marketing">
                <div class="col-md-10">
                    <h4 style=font-size:20px;font-weight:800;><?php echo $job->job_title; ?></h4>
                    <p style=font-size:15px;font-weight:400;><?php echo $job->description; ?></p>
                </div>
                <div class="col-md-2">
                    <a class="btn btn-default" style=background-color:#49e4fa;color:black;border-color:#49e4fa;border-radius:20px;font-size:15px;padding:6px;width:70%; href="job.php?id=<?php echo $job->id; ?>">View</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div> <!-- /container -->
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget">
                        <h6>Short Links</h6>
                        <ul class="footer-nav">
                            <li><a href="../index.php">Home</a></li>
                            <li><a href="../about-us.php">About Us</a></li>
                            <li><a href="../blog-home.php">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6  col-md-12">
                    <div class="single-footer-widget newsletter">
                        <h6>Other Links</h6>
                        <ul class="footer-nav">
                            <li><a href="../terms.php">Terms and Conditions</a></li>
                            <li><a href="../blog-home.php">Contact</a></li>
                        </ul>
                        <br>

                    </div>
                </div>
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget mail-chimp">
                        <h6>Get In Touch</h6>
                        <a title="Address "><i class="fa fa-map-marker "></i> No.32, Vinayagar Kovil Street,
                            Karungalpalayam,
                            Erode - 638003, Tamil Nadu, India</a>
                        <br>
                        <a href="mailto:support@nofulltime.com " title="Email "><i class="fa fa-envelope "></i>
                            support@nofulltime.com</a>
                        <br>
                        <a href="tel:+919790030919 " title="Contact "><i class="fa fa-phone "></i> +91-97900-30919</a>
                    </div>
                </div>
            </div>

            <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">

                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> NoFullTime |All rights reserved
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="https://www.facebook.com/abcinfomediapvtltd/"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/abc_infomedia/"><i class="fa fa-instagram"></i></a>
                    <a href="https://twitter.com/abc_infomedia/"><i class="fa fa-twitter"></i></a>
                    <a href="https://in.linkedin.com/company/abc-infomedia-private-limited"><i class="fa fa-linkedin"></i></a>
                    <a href="https://in.pinterest.com/abcinfomediapvtltd/"><i class="fa fa-pinterest"></i></a>
                    <a href="https://www.youtube.com/channel/UCa5hWmytEVKaeyqI_jpgAlw"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
</body>

</html>