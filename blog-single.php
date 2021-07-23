<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
session_start();
?>

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>No Full Time</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.php" style="font-size:25px;color:white;font-weight: bold;">NO FULL TIME</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="category.php">Category</a></li>
                        <li><a href="blog-home.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php
                        if (isset($_SESSION['id'])) { ?>
                            <li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                                <i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
                                <ul>
                                    <li><a href="./profile/index.php">Profile</a></li>
                                    <li><a href="./seeker_preferences.php">Edit</a></li>
                                    <li><a href="./logout.php">Logout</a></li>
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
    </header><!-- #header -->


    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Blog Single
                    </h1>
                    <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.php"> Blog</a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.php"> Blog Single</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start blog-posts Area -->
    <section class="blog-posts-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 post-list blog-post-list">
                    <div class="single-post">
                        <img class="img-fluid" src="img/blog/p1.jpg" alt="">
                        <ul class="tags">
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                        </ul>
                        <a href="#">
                            <h1>
                                Cartridge Is Better Than Ever
                                A Discount Toner
                            </h1>
                        </a>
                        <div class="content-wrap">
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training. who has the willpower to actually sit
                                through a self-imposed MCSE training.
                            </p>

                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training. who has the willpower to actually sit
                                through a self-imposed MCSE training.
                            </p>

                            <blockquote class="generic-blockquote">
                                “Recently, the US Federal government banned online casinos from operating in America by
                                making it illegal to transfer money to them through any US bank or payment system. As a
                                result of this law, most of the popular online casino networks such as Party Gaming and
                                PlayTech left the United States. Overnight, online casino players found themselves being
                                chased by the Federal government.banking”
                            </blockquote>

                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training. who has the willpower to actually sit
                                through a self-imposed MCSE training.
                            </p>

                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you should have to spend money on boot camp when you can get the MCSE study
                                materials yourself at a fraction of the camp price. However, who has the willpower to
                                actually sit through a self-imposed MCSE training. who has the willpower to actually sit
                                through a self-imposed MCSE training.
                            </p>


                        </div>
                        <div class="bottom-meta">
                            <div class="user-details row align-items-center">
                                <div class="comment-wrap col-lg-6 col-sm-6">
                                    <ul>
                                        <li><a href="#"><span class="lnr lnr-heart"></span> 4 likes</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="social-wrap col-lg-6">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!-- Start nav Area -->
                        <section class="nav-area pt-50 pb-100">
                            <div class="container">
                                <div class="row justify-content-between">
                                    <div class="col-sm-6 nav-left justify-content-start d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/prev.jpg" alt="">
                                        </div>
                                        <div class="post-details">
                                            <p>Prev Post</p>
                                            <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 nav-right justify-content-end d-flex">
                                        <div class="post-details">
                                            <p>Prev Post</p>
                                            <h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
                                        </div>
                                        <div class="thumb">
                                            <img src="img/blog/next.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End nav Area -->

                        <!-- Start comment-sec Area -->
                        <section class="comment-sec-area pt-80 pb-80">
                            <div class="container">
                                <div class="row flex-column">
                                    <h5 class="text-uppercase pb-80">05 Comments</h5>
                                    <br>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c1.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c2.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list left-padding">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c3.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c4.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-list">
                                        <div class="single-comment justify-content-between d-flex">
                                            <div class="user justify-content-between d-flex">
                                                <div class="thumb">
                                                    <img src="img/blog/c5.jpg" alt="">
                                                </div>
                                                <div class="desc">
                                                    <h5><a href="#">Emilly Blunt</a></h5>
                                                    <p class="date">December 4, 2017 at 3:12 pm </p>
                                                    <p class="comment">
                                                        Never say goodbye till the end comes!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End comment-sec Area -->

                        <!-- Start commentform Area -->
                        <section class="commentform-area pt-80">
                            <div class="container">
                                <h5 class="pb-50">Leave a Reply</h5>
                                <div class="row flex-row d-flex">
                                    <div class="col-lg-4 col-md-6">
                                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                                        <input name="email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" class="common-input mb-20 form-control" required="" type="email">
                                        <input name="Subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Subject'" class="common-input mb-20 form-control" required="" type="text">

                                    </div>
                                    <div class="col-lg-8 col-md-6">
                                        <textarea class="form-control mb-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                        <a class="primary-btn mt-20" href="#">Comment</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End commentform Area -->


                    </div>
                </div>
                <div class="col-lg-4 sidebar">
                    <div class="single-widget search-widget">
                        <form class="example" action="#" style="margin:auto;max-width:300px">
                            <input type="text" placeholder="Search Posts" name="search2">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="single-widget protfolio-widget">
                        <img src="img/blog/user2.jpg" alt="">
                        <a href="#">
                            <h4>Adele Gonzalez</h4>
                        </a>
                        <p>
                            MCSE boot camps have its supporters and
                            its detractors. Some people do not understand why you should have to spend money
                            on boot camp when you can get.
                        </p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>

                    <div class="single-widget category-widget">
                        <h4 class="title">Post Categories</h4>
                        <ul>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Techlology</h6> <span>37</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Lifestyle</h6> <span>24</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Fashion</h6> <span>59</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Art</h6> <span>29</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Food</h6> <span>15</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Architecture</h6> <span>09</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Adventure</h6> <span>44</span>
                                </a></li>
                        </ul>
                    </div>

                    <div class="single-widget recent-posts-widget">
                        <h4 class="title">Recent Posts</h4>
                        <div class="blog-list ">
                            <div class="single-recent-post d-flex flex-row">
                                <div class="recent-thumb">
                                    <img class="img-fluid" src="img/blog/r1.jpg" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="blog-single.php">
                                        <h4>
                                            Home Audio Recording
                                            For Everyone
                                        </h4>
                                    </a>
                                    <p>
                                        02 hours ago
                                    </p>
                                </div>
                            </div>
                            <div class="single-recent-post d-flex flex-row">
                                <div class="recent-thumb">
                                    <img class="img-fluid" src="img/blog/r2.jpg" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="blog-single.php">
                                        <h4>
                                            Home Audio Recording
                                            For Everyone
                                        </h4>
                                    </a>
                                    <p>
                                        02 hours ago
                                    </p>
                                </div>
                            </div>
                            <div class="single-recent-post d-flex flex-row">
                                <div class="recent-thumb">
                                    <img class="img-fluid" src="img/blog/r3.jpg" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="blog-single.php">
                                        <h4>
                                            Home Audio Recording
                                            For Everyone
                                        </h4>
                                    </a>
                                    <p>
                                        02 hours ago
                                    </p>
                                </div>
                            </div>
                            <div class="single-recent-post d-flex flex-row">
                                <div class="recent-thumb">
                                    <img class="img-fluid" src="img/blog/r4.jpg" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="blog-single.php">
                                        <h4>
                                            Home Audio Recording
                                            For Everyone
                                        </h4>
                                    </a>
                                    <p>
                                        02 hours ago
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-widget category-widget">
                        <h4 class="title">Post Archive</h4>
                        <ul>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Dec '17</h6> <span>37</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Nov '17</h6> <span>24</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Oct '17</h6> <span>59</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Sep '17</h6> <span>29</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Aug '17</h6> <span>15</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Jul '17</h6> <span>09</span>
                                </a></li>
                            <li><a href="#" class="justify-content-between align-items-center d-flex">
                                    <h6>Jun '17</h6> <span>44</span>
                                </a></li>
                        </ul>
                    </div>

                    <div class="single-widget tags-widget">
                        <h4 class="title">Tag Clouds</h4>
                        <ul>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Techlology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End blog-posts Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget">
                        <h6>Short Links</h6>
                        <ul class="footer-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="category.php">Category</a></li>
                            <li><a href="recruiters.php">Recruiters</a></li>
                            <li><a href="blog-home.php">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6  col-md-12">
                    <div class="single-footer-widget newsletter">
                        <h6>Other Links</h6>
                        <ul class="footer-nav">
                            <li><a href="terms.php">Terms and Conditions</a></li>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <br>
                        <h6>Newsletter</h6>
                        <p>You can trust us. we only send promo offers, not a single spam.</p>
                        <div id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                <div class="form-group row" style="width: 100%">
                                    <div class="col-lg-8 col-md-12">
                                        <input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                        <div style="position: absolute; left: -5000px;">
                                            <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-12">
                                        <button class="nw-btn primary-btn">Subscribe<span class="lnr lnr-arrow-right"></span></button>
                                    </div>
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget mail-chimp">
                        <h6>Get In Touch</h6>
                        <a title="Address "><i class="fa fa-map-marker "></i> No.32, Vinayagar Kovil Street,
                            Karungalpalayam,
                            Erode - 638003, Tamil Nadu, India</a>
                        <br>
                        <a href="mailto:support@nofulltime.co " title="Email "><i class="fa fa-envelope "></i>
                            support@nofulltime.co</a>
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
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>