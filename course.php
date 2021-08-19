<?php
session_start();
include './connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

     <title>Courses</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/linearicons.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
     <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


     <link rel="stylesheet" href="css/magnific-popup.css">
     <link rel="stylesheet" href="css/nice-select.css">
     <link rel="stylesheet" href="css/animate.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/element.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<style>
     button {
          color: white;
     }

     button:hover {
          color: white;
     }
</style>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


     <header id="header" id="home" style="background-color: black;">
          <div class="container">
               <div class="row align-items-center justify-content-between d-flex" style="display:flex; flex-direction:row;">
                    <div id="logo" style="width:40% ;">
                         <a style="color:white ;font-size: x-large;" href="index.php"><span><i class="fas fa-dove"></i></span> Nofulltime</a>
                    </div>
                    <nav id="nav-menu-container">
                         <ul class="nav-menu">
                              <li class="menu-active"><a href="index.php">Home</a></li>
                              <li><a href="about-us.php">About Us</a></li>
                              <li><a href="./blog-home.php">Blogs</a></li>
                              <li><a href="contact.php">Contact</a></li>
                              <?php
                              if (isset($_SESSION['id'])) { ?>
                                   <li class="message-box"><a href="chatbox/users.php" style="font-size:20px;"><i class="fas fa-comment-alt"></i></a></li>
                                   <li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                                        <i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
                                        <ul>
                                             <li><a href="./profile/index.php">Profile</a></li>
                                             <li><a href="./seeker_preferences.php">Edit</a></li>
                                             <li><a href="./logout.php">Logout</a></li>
                                        </ul>
                                   </li>
                              <?php } elseif (isset($_SESSION['recruiter_id'])) { ?>
                                   <li class="message-box"><a href="recuiter-chatbox/users.php" style="font-size:20px;"><i class="fas fa-comment-alt"></i></a></li>
                                   <li class="menu-has-children" style='background-color:none'><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                                        <i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
                                        <ul>
                                             <li><a href="./recruiters.php">Dashboard</a></li>
                                             <li><a href="./price.php">Subscribe</a></li>
                                             <li><a href="./search.php">Search</a></li>
                                             <li><a href="./recruiter_logout.php">Logout</a></li>
                                        </ul>
                                   </li>
                              <?php } else { ?>
                                   <li class="menu-has-children" style="background-color:white"><a href="" style='color:#7b63f1'>Signup</a>
                                        <ul>
                                             <li><a href="./Register/studentRegister.php">As a Part-Timer</a></li>
                                             <li><a href="./Register/recruiterRegister.php">As a recruiter</a></li>
                                        </ul>
                                   </li>
                                   <li class="menu-has-children" style="background-color:white"><a href="" style='color:#7b63f1'>Login</a>
                                        <ul>
                                             <li><a href="./Register/studentLogin.php">As a Part-Timer</a></li>
                                             <li><a href="./Register/recruiterLogin.php">As a recruiter</a></li>
                                        </ul>
                                   </li>
                              <?php } ?>
                         </ul>
                    </nav><!-- #nav-menu-container -->
               </div>
          </div>
     </header><!-- #header -->


     <!-- HOME -->
     <section id="home" style="margin-top:-20px">

          <div class="row">

               <div class="owl-carousel owl-theme home-slider ">
                    <div class="item item-first">
                         <div class="caption ">
                              <div class="container ">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>ALL YOU WANT IS HERE</h1>

                                        <a href="#feature" class="section-btn btn btn-default smoothScroll">Discover more</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Start your journey with our practical courses</h1>

                                        <a href="#courses" class="section-btn btn btn-default smoothScroll">Take a course</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Efficient Learning Methods</h1>

                                        <a href="#contact" class="section-btn btn btn-default smoothScroll">Let's chat</a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     <!-- FEATURE -->
     <section id="feature">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>01</span>
                              <h3>Trending Courses</h3>
                              <p> We provide you the best and the trending courses of the industry .</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>02</span>
                              <h3>Learn at your own pace.</h3>
                              <p> You can learn any course any time at any pace.</p>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="feature-thumb">
                              <span>03</span>
                              <h3>Best Teachers</h3>
                              <p> We provide you the best courses and the teachers who are expert in their fields.</p>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2>Start your journey to a better life with online practical courses</h2>

                              <figure>
                                   <span><i class="fa fa-users"></i></span>
                                   <figcaption>
                                        <h3>Learn</h3>
                                        <p> Learn the course of your own choice.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-bar-chart-o"></i></span>
                                   <figcaption>
                                        <h3>Apply</h3>
                                        <p>After learning apply your knowledge for some practical implementations.</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-certificate"></i></span>
                                   <figcaption>
                                        <h3>Get Certified</h3>
                                        <p>Get certified for your learnings and show the world your skills. </p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                                   <div class="row">
                                        <div class="col-lg-12 form-group">
                                             <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                                             <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                             <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">

                                             <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                                             <button class="primary-btn mt-20 text-white" style="background-image: -moz-linear-gradient(0deg, #29ca8e 0%, #29ca8e 100%);  background-image: -webkit-linear-gradient(0deg, #29ca8e 0%, #29ca8e 100%); ">Send Message</button>
                                             <div class="mt-20 alert-msg" style="text-align: left;"></div>
                                        </div>
                                   </div>
                              </form>
                         </div>
                    </div>


               </div>
          </div>
     </section>





     <!-- Courses -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Popular Courses <small>Upgrade your skills with newest courses</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 12 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 7 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Social Media Management</a></h3>
                                                  <p>Learn Social Media Management with our teachers.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <!-- <a href="#"><span>USD 25</span></a> -->
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 20 / 7 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 4.5 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Graphic & Web Design</a></h3>
                                                  <p>Learn graphic and Web Design and excell the skill.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <!-- <a href="#"><span>USD 80</span></a> -->
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 15 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 6 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Marketing Communication</a></h3>
                                                  <p>Learn Marketing Communication with us.</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                       <span>Catherine</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <!-- <a href="#"><span>Free</span></a> -->
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 10 / 8 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 8 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Android Development</a></h3>
                                                  <p></p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                       <span>Mark Wilson</span>
                                                  </div>
                                                  <div class="courses-price">
                                                       <!-- <a href="#"><span>USD 45</span></a> -->
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 5 / 10 / 2018</span>
                                                       <span><i class="fa fa-clock-o"></i> 10 Hours</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a href="#">Business &amp; Management</a></h3>
                                                  <p> Learn Business and Management</p>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-author">
                                                       <img src="img/learn.jpg" class="img-responsive" alt="">
                                                       <span>Jessica</span>
                                                  </div>
                                                  <div class="courses-price free">
                                                       <!-- <a href="#"><span>Free</span></a> -->
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>

                    </div>
               </div>
     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Student Reviews <small>from around the world</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="img/learn.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Jackson</h4>
                                             <span>Shopify Developer</span>
                                        </div>
                                        <p>I am grateful for being a student of such a brilliant course and teacher.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="img/learn.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Camila</h4>
                                             <span>Marketing Manager</span>
                                        </div>
                                        <p>This course changed my career and helped me achieving success.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="img/learn.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Barbie</h4>
                                             <span>Art Director</span>
                                        </div>
                                        <p> It was such an amazing course and I am grateful to the instructor.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="img/learn.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4>Andrio</h4>
                                             <span>Web Developer</span>
                                        </div>
                                        <p>Developing websites was not easier for me before taking this course.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                         </div>

                    </div>
               </div>
     </section>





     <?php if (!(isset($_SESSION['id']) || isset($_SESSION['recruiter_id']))) { ?>
          <!-- Start callto-action Area -->
          <section class="callto-action-area section-gap" id="join">
               <div class="container">
                    <div class="row d-flex justify-content-center">
                         <div class="menu-content col-lg-12">
                              <div class="title text-center">
                                   <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                                   <p class="text-white">Register for Free. Take NoFullTime to apply to part time jobs,learn
                                        courses and work for NGO's too.</p>
                                   <a class="primary-btn" href="./Register/studentLogin.php">I am a Part-timer</Part-timer></a>
                                   <a class="primary-btn" href="./Register/recruiterLogin.php">I am a Recruiter</a>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <!-- End calto-action Area -->
     <?php } ?>

     <!-- Start download Area -->
     <section class="download-area section-gap" id="app">
          <div class="container">
               <div class="row">
                    <div class="col-lg-6 download-left">
                         <img class="img-fluid" src="img/d1.png" alt="">
                    </div>
                    <div class="col-lg-6 download-right">
                         <h1>Download the <br>
                              NoFullTime App Today!</h1>
                         <p class="subs">
                              It won’t be a bigger problem to find one video game lover in your neighbor. Since the
                              introduction of Virtual Game, it has been achieving great heights so far as its popularity and
                              technological advancement are concerned.
                         </p>
                         <div class="d-flex flex-row">
                              <div class="buttons">
                                   <i class="fa fa-apple" aria-hidden="true"></i>
                                   <div class="desc">
                                        <a onclick="return false;">
                                             <p>
                                                  <span>Available</span> <br>
                                                  on App Store
                                             </p>
                                        </a>
                                   </div>
                              </div>
                              <div class="buttons">
                                   <i class="fa fa-android" aria-hidden="true"></i>
                                   <div class="desc">
                                        <a onclick="return false;">
                                             <p>
                                                  <span>Available</span> <br>
                                                  on Play Store
                                             </p>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <!-- End download Area -->

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
                                   <li><a href="./blog-home.php">Blogs</a></li>
                              </ul>
                         </div>
                    </div>
                    <div class="col-lg-6  col-md-12">
                         <div class="single-footer-widget newsletter">
                              <h6>Other Links</h6>
                              <ul class="footer-nav">
                                   <li><a href="terms.php">Terms and Conditions</a></li>
                                   <li><a href="contact.php">Contact</a></li>
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


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/vendor/jquery-2.2.4.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="js/vendor/bootstrap.min.js"></script>
     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
     <script src="js/easing.min.js"></script>
     <script src="js/hoverIntent.js"></script>
     <script src="js/superfish.min.js"></script>
     <script src="js/jquery.ajaxchimp.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>

     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.nice-select.min.js"></script>
     <script src="js/parallax.min.js"></script>
     <script src="js/mail-script.js"></script>
     <script src="js/main.js"></script>

</body>

</html>