<?php
$username = "root";
$servername = "localhost";
$password = "";
$conn = new mysqli($servername, $username, $password, "nofulltime");
if ($conn->connect_error) {
	die("Connection Error");
}

if (isset($_POST['submit'])) {
	$Recruiter_Id = $POST['Recruiter_Id'];
	$Amount = $POST['Amount'];
	$CGST = $POST['CGST'];
	$SGST = $POST['SGST'];
	$Total_Amount = $POST['Total_Amount'];

	$CGST = $Amount * 9 / 100;
	$SGST = $Amount * 9 / 100;
	$Total_Amount = $Amount + $CGST + $SGST;
	$sql_query = "INSERT INTO payment_details (Recruiter_Id, Amount, CGST, SGST, Total_Amount) VALUES ('$Recruiter_Id', '$Amount', '$CGST', '$SGST', '$Total_Amount')";

	if (mysqli_query($conn, $sql_query)) {
		echo "Payment is done successfully!";
	} else {
		echo "Error! " . $sql . "" . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>
<html lang="en">

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
					<a href="index.html" style="font-size:25px;color:white;font-weight: bold;">NO FULL TIME</a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="index.html">Home</a></li>
						<li><a href="about-us.html">About Us</a></li>
						<li><a href="category.html">Category</a></li>

						<li><a href="recruiters.html">Recruiters</a></li>
						<li><a href="contact.html">Contact</a></li>

						<li class="menu-has-children"><a href="" style='color:#7b63f1'>Signup</a>
							<ul>
								<li><a href="./Register/studentRegister.html">As a Student</a></li>
								<li><a href="./Register/recruiterRegister.html">As a recruiter</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href="" style='color:#7b63f1'>Login</a>
							<ul>
								<li><a href="../search.html">As a Student</a></li>
								<li><a href="../single.html">As a recruiter</a></li>
							</ul>
						</li>
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
						Pricing Plan
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="price.html"> Pricing Plan</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start price Area -->
	<section class="price-area section-gap" id="price">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Choose the best pricing for you</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="single-price no-padding">
						<div class="price-top">
							<h4>Real basic</h4>
						</div>
						<ul class="lists">
							<li>2.5 GB Space</li>
							<li>Secure Online Transfer</li>
							<li>Unlimited Styles</li>
							<li>Customer Service</li>
						</ul>
						<div class="price-bottom">
							<div class="price-wrap d-flex flex-row justify-content-center">
								<span class="price">$</span>
								<h1> 39 </h1><span class="time">Per <br> Month</span>
							</div>
							<a href="#" class="primary-btn header-btn">Get Started</a>
						</div>

					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-price no-padding">
						<div class="price-top">
							<h4>Real Standred</h4>
						</div>
						<ul class="lists">
							<li>10 GB Space</li>
							<li>Secure Online Transfer</li>
							<li>Unlimited Styles</li>
							<li>Customer Service</li>
						</ul>
						<div class="price-bottom">
							<div class="price-wrap d-flex flex-row justify-content-center">
								<span class="price">$</span>
								<h1> 69 </h1><span class="time">Per <br> Month</span>
							</div>
							<a href="#" class="primary-btn header-btn">Get Started</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-price no-padding">
						<div class="price-top">
							<h4>Real Ultimate</h4>
						</div>
						<ul class="lists">
							<li>Unlimited Space</li>
							<li>Secure Online Transfer</li>
							<li>Unlimited Styles</li>
							<li>Customer Service</li>
						</ul>
						<div class="price-bottom">
							<div class="price-wrap d-flex flex-row justify-content-center">
								<span class="price">$</span>
								<h1> 99 </h1><span class="time">Per <br> Month</span>
							</div>
							<a href="#" class="primary-btn header-btn">Get Started</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End price Area -->

	<!-- Start feature Area -->
	<section class="feature-area">
		<div class="container-fluid">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-3 feat-img no-padding">
					<img class="img-fluid" src="img/pages/f1.jpg" alt="">
				</div>
				<div class="col-lg-3 no-padding feat-txt">
					<h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
					<h1>Who we are</h1>
					<p>
						Computer users and programmers have become so accustomed to using Windows, even for the changing
						capabilities and the appearances of the graphical.
					</p>
				</div>
				<div class="col-lg-3 feat-img no-padding">
					<img class="img-fluid" src="img/pages/f2.jpg" alt="">
				</div>
				<div class="col-lg-3 no-padding feat-txt">
					<h6 class="text-uppercase text-white">Basic & Common Repairs</h6>
					<h1>What we do</h1>
					<p>
						Computer users and programmers have become so accustomed to using Windows, even for the changing
						capabilities and the appearances of the graphical.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature Area -->

	<!-- Start submit Area -->
	<section class="submit-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="submit-left">
						<h4>Submit Your Resume Today</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore.
						</p>
						<a href="#" class="primary-btn header-btn">Submit Your CV</a>
					</div>
				</div>
				<div class="col-lg-6 ">
					<div class="submit-right">
						<h4>Submit a New Job Now!</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
							ut labore.
						</p>
						<a href="#" class="primary-btn header-btn">Post a Job</a>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End submit Area -->


	<!-- start footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-12">
					<div class="single-footer-widget">
						<h6>Short Links</h6>
						<ul class="footer-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="category.html">Category</a></li>
							<li><a href="recruiters.html">Recruiters</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6  col-md-12">
					<div class="single-footer-widget newsletter">
						<h6>Other Links</h6>
						<ul class="footer-nav">
							<li><a href="terms.html">Terms and Conditions</a></li>
							<li><a href="contact.html">Contact</a></li>
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
						<a title="Address "><i class="fa fa-map-marker "></i> No.32, Vinayagar Kovil Street, Karungalpalayam,
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