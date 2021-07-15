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
	<title>Job Listing</title>
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

						<li><a href="recruiters.php">Recruiters</a></li>
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
						Job category
					</h1>
					<p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="category.php"> Job category</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="img/post.png" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.php">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="img/post.png" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.php">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="img/post.png" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.php">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="img/post.png" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.php">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="img/post.png" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.php">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="img/post.png" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.php">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>
					<div class="single-post d-flex flex-row">
						<div class="thumb">
							<img src="img/post.png" alt="">
							<ul class="tags">
								<li>
									<a href="#">Art</a>
								</li>
								<li>
									<a href="#">Media</a>
								</li>
								<li>
									<a href="#">Design</a>
								</li>
							</ul>
						</div>
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									<a href="single.php">
										<h4>Creative Art Designer</h4>
									</a>
									<h6>Premium Labels Limited</h6>
								</div>
								<ul class="btns">
									<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
									<li><a href="#">Apply</a></li>
								</ul>
							</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
								ididunt ut dolore magna aliqua.
							</p>
							<h5>Job Nature: Full time</h5>
							<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
							<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
						</div>
					</div>

				</div>
				<div class="col-lg-4 sidebar">
					<div class="single-slidebar">
						<h4>Jobs by Location</h4>
						<ul class="cat-list">
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>New York</p><span>37</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Park Montana</p><span>57</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Atlanta</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Arizona</p><span>36</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Florida</p><span>47</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Rocky Beach</p><span>27</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Chicago</p><span>17</span>
								</a></li>
						</ul>
					</div>

					<div class="single-slidebar">
						<h4>Top rated job posts</h4>
						<div class="active-relatedjob-carusel">
							<div class="single-rated">
								<img class="img-fluid" src="img/r1.jpg" alt="">
								<a href="single.php">
									<h4>Creative Art Designer</h4>
								</a>
								<h6>Premium Labels Limited</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
									ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka
								</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<a href="#" class="btns text-uppercase">Apply job</a>
							</div>
							<div class="single-rated">
								<img class="img-fluid" src="img/r1.jpg" alt="">
								<a href="single.php">
									<h4>Creative Art Designer</h4>
								</a>
								<h6>Premium Labels Limited</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
									ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka
								</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<a href="#" class="btns text-uppercase">Apply job</a>
							</div>
							<div class="single-rated">
								<img class="img-fluid" src="img/r1.jpg" alt="">
								<a href="single.php">
									<h4>Creative Art Designer</h4>
								</a>
								<h6>Premium Labels Limited</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc
									ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka
								</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<a href="#" class="btns text-uppercase">Apply job</a>
							</div>
						</div>
					</div>

					<div class="single-slidebar">
						<h4>Jobs by Category</h4>
						<ul class="cat-list">
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Technology</p><span>37</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Media & News</p><span>57</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Goverment</p><span>33</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Medical</p><span>36</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Restaurants</p><span>47</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Developer</p><span>27</span>
								</a></li>
							<li><a class="justify-content-between d-flex" href="category.php">
									<p>Accounting</p><span>17</span>
								</a></li>
						</ul>
					</div>

					<div class="single-slidebar">
						<h4>Carrer Advice Blog</h4>
						<div class="blog-list">
							<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
								<a href="single.php">
									<h4>Home Audio Recording <br>
										For Everyone</h4>
								</a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>
									<p>
										<span class="lnr lnr-heart"></span>
										06
										<span class="lnr lnr-bubble"></span>
										02
									</p>
								</div>
							</div>
							<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
								<a href="single.php">
									<h4>Home Audio Recording <br>
										For Everyone</h4>
								</a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>
									<p>
										<span class="lnr lnr-heart"></span>
										06
										<span class="lnr lnr-bubble"></span>
										02
									</p>
								</div>
							</div>
							<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
								<a href="single.php">
									<h4>Home Audio Recording <br>
										For Everyone</h4>
								</a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>
									<p>
										<span class="lnr lnr-heart"></span>
										06
										<span class="lnr lnr-bubble"></span>
										02
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End post Area -->

	<!-- Start callto-action Area -->
	<section class="callto-action-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content col-lg-9">
					<div class="title text-center">
						<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation.</p>
						<a class="primary-btn" href="#">I am a Candidate</a>
						<a class="primary-btn" href="#">Request Free Demo</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End calto-action Area -->

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
							<li><a href="contact.php">Contact</a></li>
						</ul>
						<br>

					</div>
				</div>
				<div class="col-lg-3  col-md-12">
					<div class="single-footer-widget mail-chimp">
						<h6>Get In Touch</h6>
						<a title="Address "><i class="fa fa-map-marker "></i> No.32, Vinayagar Kovil Street,
							Karungalpalayam, Erode - 638003, Tamil Nadu, India</a>
						<br>
						<a href="mailto:support@nofulltime.com " title="Email "><i class="fa fa-envelope "></i>support@nofulltime.com</a>
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