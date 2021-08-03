<?php
session_start();
include './connect.php';
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
	<title>Job Listing</title>
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
						Blog Posts
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-home.php"> Blog Posts</a></p>
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
						<img class="img-fluid" src="./img/blog/p1.jpg" alt="">
						<ul class="tags">
							<li><a href="#">Career, </a></li>
							<li><a href="#">Technology, </a></li>
							<li><a href="#">Jobs</a></li>
						</ul>
						<a href="blog-single.php">
							<h1>
								The web is working for part-time businesses
							</h1>
						</a>
						<p>
							Part-time businesses play an important role in our lives and in our economy. From the gardening mom who sells her plants, to the hobbyist antiques dealer, to the weekend wedding photographer, people everywhere are earning extra money while doing what they love.......
						</p>

					</div>
					<div class="single-post">
						<img class="img-fluid" src="./img/blog-course.jpg" alt="">
						<ul class="tags">
							<li><a href="#">Career, </a></li>
							<li><a href="#">Technology, </a></li>
							<li><a href="#">Jobs</a></li>
						</ul>
						<a href="blog-course.php">
							<h1>
								The web is hosting for Latest Demanding courses
							</h1>
						</a>
						<p>
							Online learning has numerous advantages over traditional learning methods. Some of these include the possibility for students to make use of self-paced learning and to choose their own learning environments. Additionally, e-learning is both cost-effective and cost-efficient, as it removes the geographical obstacles often associated with traditional classrooms and education.
						</p>

					</div>
					<div class="single-post">
						<img class="img-fluid" src="./img/blog-hiring.jpg" style="height:450px; width:670px;" alt="">
						<ul class="tags">
							<li><a href="#">Career, </a></li>
							<li><a href="#">Technology, </a></li>
							<li><a href="#">Jobs</a></li>
						</ul>
						<a href="blog-hiring.php">
							<h1>
								The web is working on Improving hiring process
							</h1>
						</a>
						<p>
							One of the most significant ways a leader can impact their business is through the quality of their hiring, yet this is rarely listed as a critical leadership competency and often overlooked. In my experience, this is usually because the impact is not as immediately visible as for example when they make an investor presentation that goes badly or fails to convince the Board during a key presentation......
						</p>

					</div>
					<div class="single-post">
						<img class="img-fluid" src="img/blog/p4.jpg" alt="">
						<ul class="tags">
							<li><a href="#">Art, </a></li>
							<li><a href="#">Technology, </a></li>
							<li><a href="#">Fashion</a></li>
						</ul>
						<a href="blog-single.php">
							<h1>
								Cartridge Is Better Than Ever
								A Discount Toner
							</h1>
						</a>
						<p>
							MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
						</p>

					</div>
				</div>
				<div class="col-lg-4 sidebar">


					<div class="single-widget recent-posts-widget">
						<h4 class="title">Recent Posts</h4>
						<div class="blog-list ">
							<div class="single-recent-post d-flex flex-row">
								<div class="recent-thumb">
									<img class="img-fluid" src="img/blog/p1.jpg" alt="" style=width:230px;height:80px;>
								</div>
								<div class="recent-details">
									<a href="blog-single.php">
										<h4>
											The web is working for part-time businesses
										</h4>
									</a>
									<p>
										02 days ago
									</p>
								</div>
							</div>
							<div class="single-recent-post d-flex flex-row">
								<div class="recent-thumb">
									<img class="img-fluid" src="img/blog-course.jpg" alt="" style=width:142px;height:80px;>
								</div>
								<div class="recent-details">
									<a href="./blog-course.php">
										<h4>
											Latest Demanding Courses
										</h4>
									</a>
									<p>
										02 hours ago
									</p>
								</div>
							</div><br>
							<div class="single-recent-post d-flex flex-row">
								<div class="recent-thumb">
									<img class="img-fluid" src="img/blog-hiring.jpg" alt="" style=width:200px;height:80px;>
								</div>
								<div class="recent-details">
									<a href="blog-hiring.php">
										<h4>
											Improving hiring process
										</h4>
									</a>
									<p>
										01 hour ago
									</p>
								</div>
							</div>
							<div class="single-recent-post d-flex flex-row">
								<div class="recent-thumb">
									<img class="img-fluid" src="img/blog/r4.jpg" alt="" style=width:200px;height:80px;>
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