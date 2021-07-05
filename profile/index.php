<!DOCTYPE html>

<html lang="en">

<head>
	<title>Personal Info</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">
	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/style.css" />
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../seeker_details.css">
</head>
<style>
	#mobile-nav ul .menu-has-children i {
		color: white;
	}

	.menu-has-children {
		background-color: black;
	}

	.mobile {
		display: none;
	}

	@media only screen and (max-width:738px) {
		#mobile-nav ul .menu-has-children i {
			color: black;
		}

		.mobile {
			display: block;
		}
	}
</style>

<body>
	<?php

	$id = 8;
	include "../connect.php";
	$user_table = "SELECT * FROM `users` WHERE id='$id'";
	$results = $conn->query($user_table);
	if ($results->num_rows > 0) {
		while ($row = $results->fetch_assoc()) {
			$email = $row['email'];
			$phno = $row['phone'];
		}
	}
	$query1 = "SELECT * FROM `seeker_details` WHERE id='$id	'";
	$res1 = $conn->query($query1);
	if ($res1->num_rows > 0) {
		while ($row = $res1->fetch_assoc()) {
			$name = ucfirst($row['fullname']);
			$age =  $row['age'];
			$gender = ucfirst($row['gender']);
			$status = ucfirst($row['status']);
			$city = ucfirst($row['town']);
			$state = ucfirst($row['state']);
			$country = ucfirst($row['country']);
			$address = $city . "," . $state . "," . $country;
			$pin_code = $row['pin_code'];
			$category = $row['category'];
			$part_time_start = substr($row['part_time_start'], 0, 5);
			$part_time_end = substr($row['part_time_end'], 0, 5);
			$course_time_start = substr($row['course_time_start'], 0, 5);
			$course_time_end = substr($row['course_time_end'], 0, 5);
			$ngo_time_start = substr($row['ngo_time_start'], 0, 5);
			$ngo_time_end = substr($row['ngo_time_end'], 0, 5);
		}
	}

	if (strpos($category, 'parttime') !== false) {
		$query2 = "SELECT * FROM `job_seeker_details` WHERE id='$id'";
		$res2 = $conn->query($query2);
		if ($res2->num_rows > 0) {
			while ($row = $res2->fetch_assoc()) {
				$summary = ucfirst($row['summary']);
				$field = ucfirst(strtolower($row['field']));
				$position = ucfirst(strtolower($row['position']));
				$temp = $row['place_of_work'];
				if ($temp == "wfh")
					$place_of_work = 'Work from home';
				else
					$place_of_work = 'In Ofiice';
			}
		}
	}


	if (strpos($category, 'parttime') !== false) {
		$q = "SELECT * FROM `education_details` WHERE id='$id' ORDER BY year";
		$res = $conn->query($q);
	}


	if (strpos($category, 'course') !== false) {
		$query3 = "SELECT * FROM `course_details` WHERE id='$id'";
		$res3 = $conn->query($query3);
		if ($res3->num_rows > 0) {
			while ($row = $res3->fetch_assoc()) {
				$course_field = ucfirst(strtolower($row['field']));
				$course_name = ucfirst(strtolower($row['course']));
				$temp = $row['mode_of_learning'];
				if ($temp == "online")
					$mode_of_learning = 'Online';
				else
					$mode_of_learning = 'Coaching Center';
			}
		}
	}

	if (strpos($category, 'ngo') !== false) {
		$query4 = "SELECT * FROM `ngo_details` WHERE id='$id'";
		$res4 = $conn->query($query4);
		if ($res4->num_rows > 0) {
			while ($row = $res4->fetch_assoc()) {

				$ngo_field = ucfirst(strtolower($row['field']));
				$ngo_position = ucfirst(strtolower($row['position']));
				$temp = $row['place_of_work'];
				if ($temp == "wfh")
					$ngo_place_of_work = 'Work from home';
				else
					$ngo_place_of_work = 'In Ofiice';
			}
		}
	}


	if (isset($_POST['mail'])) {
		$to = $email;
		$from = $_POST['email'];
		$name = $_POST['name'];
		$subject = $_POST['subject'];
		$message = $name . "\nSubject : " . $subject . " \nMassege:" . "\n" . $_POST['message'];
		$headers = "From:" . $from;
		$headers2 = "From:" . $to;
		mail($to, $subject, $message, $headers);
		mail($from, $subject2, $message2, $headers2);
		echo "<script>alert('Your query is succesfully sent');
        window.location.href='contact.html';  
        </script>";
	}

	?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<header id="header" id="home" style='background-color:black'>
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="index.html"><img src="../img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="../index.html">Home</a></li>
						<li><a href="../about-us.html">About Us</a></li>
						<li><a href="../category.html">Category</a></li>
						<li><a href="../recruiters.html">Recruiters</a></li>
						<li><a href="../blog-home.html">Blog</a></li>
						<li><a href="../contact.html">Contact</a></li>

						<li class="menu-has-children"><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
							<i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
							<ul>
								<li><a href="./index.php">Profile</a></li>
								<li><a href="../seeker_preferences.php">Edit</a></li>
								<li><a href="../index.html">Logout</a></li>
							</ul>
						</li>

					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->
	<!-- Hero section start -->
	<section class="hero-section spad">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="row">
						<div class="col-lg-6">
							<div class="hero-text">
								<h2><?php echo $name ?></h2>
								<p><?php echo "$summary"; ?></p>
							</div>
							<div class="hero-info">
								<h2>General Info</h2>
								<ul>
									<li><span>Age</span><?php echo $age ?></li>
									<li><span>Gender</span><?php echo $gender ?></li>
									<li><span>Martial-Status</span><?php echo $status ?></li>
									<li><span>Address</span><?php echo $address ?></li>
									<li><span>PIN code</span><?php echo $pin_code ?></li>
									<li><span>E-mail</span><?php echo $email ?></li>
									<li><span>Phone </span><?php echo $phno ?></li>
								</ul>
								<div class="col-md-8 mt-5 text-md-right header-buttons">
									<a href="../uploads/resume/Bhanu Krishna Prasad-Resume.pdf" class="site-btn" download>Download Resume</a>
									<a href="#contact" class="site-btn">Contact Me</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 text-center">
							<figure class="hero-image">
								<?php
								if ($gender == 'Male') {
								?>
									<img src="img/hero-m.png" alt="5">
								<?php
								} else {
								?>
									<img src="img/hero-f.jpg" alt="5">
								<?php } ?>
							</figure>
							<button class='btn btn-dark mt-2'>Upload/Edit</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->
	<!-- Resume section start -->
	<?php if (strpos($category, 'parttime') !== false and $res->num_rows > 0) { ?>
		<section class="resume-section with-bg spad">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-7 offset-xl-2">
						<div class="section-title">
							<h2>Education</h2>
						</div>
						<ul class="resume-list">
							<?php
							if ($res->num_rows > 0) {
								while ($row = $res->fetch_assoc()) {
									echo "<li>
							<h2>" . $row["stream"] . "</h2>
							<h3>" . $row["college"] . "</h3>
							<h4>Percentage:" . $row["percentage"] . "%</h4>
							<h4>Graduation Year:" . $row["year"] . "</h4>
							<p>Graduation Status:" . $row["graduation_status"] . "</p>
						</li>";
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<?php } ?>
	<!-- Resume section end -->
	<?php if (strpos($category, 'parttime') !== false) { ?>
		<section class="resume-section spad">
		<?php } else { ?>
			<section class="resume-section with-bg spad">
			<?php } ?>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-7 offset-xl-2">
						<div class="section-title">
							<h2>Prefernces</h2>
						</div>
						<ul class="resume-list">
							<?php if (strpos($category, 'parttime') !== false) { ?>
								<li>
								<?php

								echo "<h2>Part Time Jobs</h2>";
								echo "<h3>Field -" . $field . "</h3>";
								echo "<h4>Position -" . $position . "</h4>";
								echo "<p>Place Of Work -" . $place_of_work . "</p>";
								echo "<p>Time allocated :" . $part_time_start . " - " . $part_time_end . "</p>";
							}
								?>
								</li>
								<?php
								if (strpos($category, 'course') !== false) { ?>
									<li>
									<?php

									echo "<h2>Learn a course</h2>";
									echo "<h3>Field -" . $course_field . "</h3>";
									echo "<h4>Position -" . $course_name . "</h4>";
									echo "<p>Place Of Work -" . $mode_of_learning . "</p>";
									echo "<p>Time allocated :" . $course_time_start . " - " . $course_time_end . "</p>";
								}
									?>
									</li>
									<?php
									if (strpos($category, 'ngo') !== false) { ?>
										<li>
										<?php

										echo "<h2>Work for a NGO</h2>";
										echo "<h3>Sector -" . $ngo_field . "</h3>";
										echo "<h4>Position -" . $ngo_position . "</h4>";
										echo "<p>Place Of Work -" . $ngo_place_of_work . "</p>";
										echo "<p>Time allocated :" . $ngo_time_start . " - " . $ngo_time_end . "</p>";
									}
										?>
										</li>
						</ul>
					</div>
				</div>
			</div>
			</section>
			<!-- Contact section start -->
			<section class="contact-section spad" id='contact'>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-8 offset-xl-2">
							<div class="section-title">
								<h2>Contact Me</h2>
							</div>
							<form class="contact-form" method='POST'>
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Name">
									</div>
									<div class="col-md-6">
										<input type="text" placeholder="E-mail">
									</div>
									<div class="col-md-12">
										<input type="text" placeholder="Subject">
										<textarea placeholder="Message"></textarea>
									</div>
								</div>
								<div class="text-md-right">
									<button class="site-btn" name='mail' type='submit'>Send message</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- Contact section end -->
			<!--====== Javascripts & Jquery ======-->
			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="../js/vendor/bootstrap.min.js"></script>
			<script src="../js/easing.min.js"></script>
			<script src="../js/hoverIntent.js"></script>
			<script src="../js/superfish.min.js"></script>
			<script src="../js/jquery.ajaxchimp.min.js"></script>
			<script src="../js/jquery.magnific-popup.min.js"></script>
			<script src="../js/owl.carousel.min.js"></script>
			<script src="../js/jquery.sticky.js"></script>
			<script src="../js/jquery.nice-select.min.js"></script>
			<script src="../js/parallax.min.js"></script>
			<script src="../js/mail-script.js"></script>
			<script src="../js/main.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/magnific-popup.min.js"></script>
			<script src="js/circle-progress.min.js"></script>
			<script src="js/main.js"></script>
</body>

</html>