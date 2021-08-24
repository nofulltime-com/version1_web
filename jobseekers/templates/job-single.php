<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="recruiterRegister.css">
    <link rel="stylesheet" href="./inc/css/linearicons.css">
    <link rel="stylesheet" href="./inc/css/animate.min.css">
    <link rel="stylesheet" href="./inc/css/nice-select.css">
    <link rel="stylesheet" href="./inc/css/magnific-popup.css">
    <link rel="stylesheet" href="./inc/css/owl.carousel.css">
    <link rel="stylesheet" href="./inc/css/main.css">
    <link rel="stylesheet" href="/seeker_details.css">
    <title>NoFullTime | Post</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css">

    <style>
        <?php include "../templates/inc/css/main2.css" ?><?php include "../templates/inc/css/narrow.css" ?><?php include "./inc/css/main.css" ?><?php include "../templates/inc/css/bootstrap.css" ?><?php include "../templates/inc/css/linearicons.css" ?><?php include "../templates/inc/css/font-awesome.min.css" ?><?php include "../templates/inc/css/magnific-popup.css" ?><?php include "../templates/inc/css/nice-select.css" ?><?php include "../templates/inc/css/owl.carousel.css" ?><?php include "../templates/inc/css/animate.min.css" ?>
    </style>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<style>
    .special {
        display: none
    }

    @media only screen and (max-width:738px) {
        .special {
            display: block;
        }
    }
</style>

<body>
<header id="header" id="home" style='background-color:black'>
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a style="color:white ;font-size: x-large;font-weight:bold" href="../index.php"><span><i class="fas fa-dove"></i></span> Nofulltime</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="../index.php">Home</a></li>
                        <li><a href="../about-us.php">About Us</a></li>
                        <li><a href="../blog-home.php">Blogs</a></li>
                        <li><a href="../contact.php">Contact</a></li>

                        <?php
                        if (isset($_SESSION['id'])) { ?>
                            <li class="message-box"><a href="../chatbox/users.php" style="font-size:20px;"><i class="fas fa-comment-alt"></i></a></li>

                            <li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                                <i class='fas fa-user-circle special mobile' style='font-size:36px;color:white'></i>
                                <ul>
                                    <li><a href="./index.php">Profile</a></li>
                                    <li><a href="../seeker_preferences.php">Edit</a></li>
                                    <li><a href="../../jobseekers/index.php">Latest Posts</a></li>
                                    <li><a href="../logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php } elseif (isset($_SESSION['recruiter_id'])) { ?>
                            <li class="message-box"><a href="../recuiter-chatbox/users.php" style="font-size:20px;"><i class="fas fa-comment-alt"></i></a></li>

                            <li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                                <i class='fas fa-user-circle mobile special' style='font-size:36px;color:white;'></i>
                                <ul>
                                    <li><a href="../recruiters.php">Dashboard</a></li>
                                    <li><a href="../price.php">Subscribe</a></li>
                                    <li><a href="../search.php">Search</a></li>
                                    <li><a href="../recruiter_logout.php">Logout</a></li>
                                </ul>
                            </li>
                        <?php } ?>

                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header --><br><br><br>
    <div class="container">
        <div class="head clearfix">
            <div class="head">
                <ul class="head head-pills pull-right">
                    <li role="presentation" style=background-color:#49e4fa;border-radius:20px;padding-left:20px;padding-right:20px;><a href="index.php">Home</a></li>
                </ul>
            </div>
            <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
        </div>
        <hr />
        <?php displayMessage(); ?>
        <h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>) </h2>
        <small style=font-size:18px;>Posted By <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
        <hr>
        <p class="lead"><?php echo $job->description; ?></p>
        <ul class="list-group">
            <li class="list-group-item" style=font-size:18px;><strong>Company:</strong> <?php echo $job->company; ?></li>
            <!-- <li class="list-group-item" style=font-size:18px;><strong>Salary:</strong> <?php echo $job->salary; ?></li> -->
            <li class="list-group-item"><strong>Contact Email:</strong> <?php echo $job->contact_email; ?></li>
        </ul>
        <br><br>
        <a href="index.php" style=color:#a367e7;font-size:20px;font-weight:500;>Go Back</a>
        <br><br>
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
                            <li><a href="../contact.php">Contact</a></li>
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
    <script src="jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="/js/easing.min.js"></script>
    <script src="/js/hoverIntent.js"></script>
    <script src="/js/superfish.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/jquery.nice-select.min.js"></script>
    <script src="/js/parallax.min.js"></script>
    <script src="/js/mail-script.js"></script>
    <script src="/js/main.js"></script>
</body>

</html>