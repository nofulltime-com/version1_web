<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

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
	<title>NoFullTime</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
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
					<a style="color:white ;font-size: x-large;font-weight:bold" href="index.php"><span><i class="fas fa-dove"></i></span> Nofulltime</a>
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
						About Us
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="about-us.php"> About Us</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start service Area -->
	<section class="service-area section-gap" id="service">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 pb-40 header-text">
					<h1>Why Choose Us</h1>
					<p>
						We have everything to help you out find your next hire!
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-service" style=height:203px;>
						<h4><span class="lnr lnr-phone"></span>Great Support</h4>
						<p>
							We are there for you 24x7! Come with any query at anytime.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service" style=height:203px;>
						<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
						<p>
							We are highly recommended by all because we do not make our job seekers disheartened.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-service" style=height:203px;>
						<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
						<p>
							We always get positive reviews. It is only possible due to our hard wark and good
							cooperation with the hirers.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End service Area -->

	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-3 feat-img ">
					<img class="img-fluid" src="img/pages/f1.jpg" alt="">
				</div>
				<div class="col-lg-3 feat-txt">
					<h1>Who we are</h1>
					<p style='color:white'>
						NoFullTIme is India’s #1 part time work marketplace.
						We’re the country’s largest platform for part time work, with 100 million registered job seekers
						and job opportunities at 900,000 employer locations in different parts of India.
						We take the work out of finding the right job or the perfect worker.
					</p>
				</div>
				<div class="col-lg-3 feat-img ">
					<img class="img-fluid" src="img/pages/f2.jpg" alt="">
				</div>
				<div class="col-lg-3 feat-txt">
					<h1>What we do</h1>
					<p style='color:white'>
						We’re on a mission to match the job seekers,people who want to learn courses and work for NGO's with the right-fit positions so they can maximize
						their potential and live more fulfilling lives and use their part-time to the best purpose.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature Area -->

	<!-- Start team Area -->
	<section class="team-area section-gap" id="team">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Hiring Partners</h1>
						<p>Guarantees excellent work envionment and excellent team.</p>
					</div>
				</div>
			</div>
			<div class="row justify-content-center d-flex align-items-center">
				<div class="col-md-3 single-team">
					<div class="thumb">
						<img class="img-fluid" src="img/pages/Rapido.jpg" alt="">
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>Rapido Bike Taxi</h4>
					</div>
				</div>
				<div class="col-md-3 single-team">
					<div class="thumb">
						<img class="img-fluid" src="img/pages/HDFC Bank.jpg" alt="">
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>HDFC Bank</h4>
					</div>
				</div>
				<div class="col-md-3 single-team">
					<div class="thumb">
						<img class="img-fluid" src="img/pages/Jio.jpg" alt="">
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>Jio</h4>
					</div>
				</div>
				<div class="col-md-3 single-team">
					<div class="thumb">
						<img class="img-fluid" src="img/pages/abc.jpg" alt="">
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>ABC Infomedia Private Limited</h4>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End team Area -->


	<!-- Start callto-action Area -->
	<section class="callto-action-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
						<p class="text-white">Register for Free. Take NoFullTime to apply to part time jobs,learn
							courses and work for NGO's too.</p>
						<a class="primary-btn" href="./Register/studentLogin.php">I am a Candidate</a>
						<a class="primary-btn" href="./Register/recruiterLogin.php">I am a Recruiter</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End calto-action Area -->

	<!-- Start testimonial Area -->

	<section class="testimonial-area section-gap" id="review">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Job Seekers Reviews</h1>
						<p>Our Happy Users. We are happy to give them a smile for our dedicated work.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="active-review-carusel">
					<div class="single-review">
						<img src="img/pages/t1.jpg" alt="">
						<div class="title d-flex flex-row">
							<h4>Mark Luthans</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
						</div>
						<p>
							It is a wonderful part time job seeking site.
							They provide a dictionary of the various companies in India.
							The site is very friendly and give response in time without any delay.
						</p>
					</div>
					<div class="single-review">
						<img src="img/pages/t4.jpg" alt="">
						<div class="title d-flex flex-row">
							<h4>Jennifer Juliet</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
						</div>
						<p>
							It is a mindblowing part time job seeking site.
							They have a dictionary of hiring companies. I got my first part time job. Thank You,
							NoFullTime.
						</p>
					</div>
					<div class="single-review">
						<img src="img/pages/t3.jpg" alt="">
						<div class="title d-flex flex-row">
							<h4>Adam Stark</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
						</div>
						<p>
							For them "Work is Worship". Brilliant! Love this part time job site.
						</p>
					</div>
					<div class="single-review">
						<img src="img/pages/t2.jpg" alt="">
						<div class="title d-flex flex-row">
							<h4>James Arthur</h4>
							<div class="star">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
							</div>
						</div>
						<p>
							I got my first part time job after trying different part time job sites.
							When my friend informed me about this site, I wasn't sure if this was also legitimate.
							But this site showed that they are a legitimate part time job site. Thank You, NoFullTime.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End testimonial Area -->


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