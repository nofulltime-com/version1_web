<?php
session_start();
include './connect.php';
?>
<!DOCTYPE html>
<html>

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

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/filter_style.css">
	<link rel="stylesheet" href="css/element.css">
</head>
<?php
if (isset($_POST['submit'])) {
	$url = "search.php?";
	echo "<script>console.log('Hello')</script>";
	if (isset($_POST['category'])) {
		$category = $_POST['category'];
		$url = $url . "category=$category";
	}
	if (isset($_POST['search']) and $_POST['search'] != "") {
		$search = $_POST['search'];
		$url = $url . "&search=$search";
	}
	if (isset($_POST['pincode']) and $_POST['pincode'] != "") {
		$pincode = $_POST['pincode'];
		$url = $url . "&pincode=$pincode";
	}
	echo "<script>console.log('$url')</script>";
	echo "<script>location.replace('$url')</script>";
}
?>

<body>

	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
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
									<li><a href="./jobseekers/index.php">Latest Posts</a></li>
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
									<li><a href="./Register/studentRegister.php">As a Part-timer</a></li>
									<li><a href="./Register/recruiterRegister.php">As a recruiter</a></li>
								</ul>
							</li>
							<li class="menu-has-children" style="background-color:white"><a href="" style='color:#7b63f1'>Login</a>
								<ul>
									<li><a href="./Register/studentLogin.php">As a Part-timer</a></li>
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
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-12">
					<h1 class="text-white">
						<span>1500+</span> Candidates registered last week
					</h1>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="serach-form-area">
						<div class="row justify-content-center form-wrap">
							<div class="col-lg-4 form-cols">
								<input type="text" class="form-control" name="search" placeholder="E.g Web Developement">
							</div>

							<div class="col-lg-3 form-cols">
								<div class="default-select" id="default-selects2">
									<select name="category">
										<option value="all">All Categories</option>
										<option value="parttime">Part Time job seekers</option>
										<option value="course">Course seekers</option>
										<option value="ngo">Volunteers</option>
									</select>
								</div>
							</div>

							<div class="col-lg-3 form-cols">
								<input type="text" class="form-control" name="pincode" placeholder="Enter PinCode E.g : 522034">
							</div>
							<div class="col-lg-2 form-cols">
								<button type="submit" name="submit" class="btn btn-info">
									<span class="lnr lnr-magnifier"></span> Search
								</button>
							</div>
						</div>
					</form>
					<p class="text-white" style="font-size:18px;font-weight: 500;"><span>Search by :</span>
						Field,Course,Position and Pin code</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start features Area -->
	<section class="features-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="single-feature" style=height:150px;background-color:white;background-image:linear-gradient(white,#49e4fa);>
						<h4 style=font-weight:600;font-size:20px;>Register</h4>
						<p style=font-size:15px;>
							Register in your field of interest.php
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature" style=height:150px;background-color:white;background-image:linear-gradient(white,#49e4fa);>
						<h4>Connect</h4>
						<p style=font-size:15px;>
							Connect with part-time job providersa and course providers.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature" style=height:150px;padding-left:10px;padding-right:10px;background-color:white;background-image:linear-gradient(white,#49e4fa);>
						<h4>Security</h4>
						<p style=font-size:15px;>
							Do not worry. The jobs are highly secured.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature" style=height:150px;padding-top:25px;padding-left:5px;background-color:white;background-image:linear-gradient(white,#49e4fa);>
						<h4>Notifications</h4>
						<p style=font-size:15px;> Subscribe to our newsletter to get know more about the upcoming job. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End features Area -->

	<!-- Start popular-post Area -->
	<section class="popular-post-area pt-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="active-popular-post-carusel">
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="img/pages/abc.jpg" alt="" style=height:200px;width:300px;>
						</div>
						<div class="details">
							<a onclick="return false;">
								<h4>Web Developer</h4>
							</a>
							<h6>Erode, Tamil Nadu</h6>
							<p>
								Work as an Web Developer in the company.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="img/pages/abc.jpg" alt="" style=height:200px;width:300px;>
						</div>
						<div class="details">
							<a onclick="return false;">
								<h4>Android Developer</h4>
							</a>
							<h6>Erode, Tamil Nadu</h6>
							<p>
								Work as an Android Developer in the company.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="img/Uber_Eats.jpg" alt="" style=height:200px;width:300px;>
						</div>
						<div class="details">
							<a onclick="return false;">
								<h4>Food Delivery - Weekly Pay</h4>
							</a>
							<h6>Ludhiana</h6>
							<p>
								Deliver with Uber. Earn on your schedule.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row" style=height:260px;>
						<div class="thumb">
							<img src="img/Uber_Eats.jpg" alt="" style=height:200px;width:300px;>
						</div>
						<div class="details">
							<a onclick="return false;">
								<h4>Food Delivery - Weekly Pay</h4>
							</a>
							<h6>Hyderabad</h6>
							<p>
								Deliver with Uber. Earn on your schedule.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row" style=height:260px;>
						<div class="thumb">
							<img src="img/indeed.jpg" alt="" style=height:200px;width:300px;>
						</div>
						<div class="details">
							<a onclick="return false;">
								<h4>Strategic Partnerships Manager</h4>
							</a>
							<h6>Hyderabad</h6>
							<p>
								An experienced social impact professional to build Strategic Partnerships strategy for team in India.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row" style=height:260px;>
						<div class="thumb">
							<img src="img/Peoples Forum.jpg" alt="" style=height:200px;width:300px;>
						</div>
						<div class="details">
							<a onclick="return false;">
								<h4>Field Representative (MFI)</h4>
							</a>
							<h6>Khurda, Orissa</h6>
							<p>
								Conduct village surveys, maintaining discipline, on time collections and addressing queries.
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!-- End popular-post Area -->

	<!-- Start feature-cat Area -->
	<section class="feature-cat-area pt-100" id="category">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Featured Part-time Job Categories</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/o1.png" alt="">
						</a>
						<p>Accounting</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/o2.png" alt="">
						</a>
						<p>Development</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/o3.png" alt="">
						</a>
						<p>Technology</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/o4.png" alt="">
						</a>
						<p>Media & News</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/o5.png" alt="">
						</a>
						<p>Medical</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/o6.png" alt="">
						</a>
						<p>Goverment</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature-cat Area -->
	<section class="feature-cat-area pt-100" id="category">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-60 col-lg-10">
					<div class="title text-center">
						<h1 class="mb-10">Courses</h1>
						<p>Learn a new skill to be in demand in this era.</p>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/home_course/website.png" alt="">
						</a>
						<p>Web Development</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/home_course/android.png" alt="">
						</a>
						<p>Android Development</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/home_course/creative.png" alt="">
						</a>
						<p>Creative Writing</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/home_course/video-editing.png" alt="">
						</a>
						<p>Video Editing</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/home_course/machine-learning.png" alt="">
						</a>
						<p>Machine Learning</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="single-fcat">
						<a href="./Register/studentLogin.php">
							<img src="img/home_course/php.png" alt="">
						</a>
						<p>php</p>
					</div>
				</div>

			</div>
			<div class="courses-tag"> <a href="course.php">Know more
					<i class="fa fa-arrow-right" aria-hidden="true"></i> </a></div>
		</div>
	</section>
	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					<div class="title text-center">
						<h1 class="mb-10">Registered candidates</h1>
					</div>
					<ul class="cat-list">
						<li class="tablinks clicked" onclick="openCategory(event, 'parttime')"><a>part Time</a></li>
						<li class="tablinks" onclick="openCategory(event, 'course')"><a>Courses</a></li>
						<li class="tablinks" onclick="openCategory(event, 'ngo')"><a>NGO</a></li>
					</ul>
					<div class="tabContent" style="display:block" id='parttime'>
						<?php
						$parttime = "SELECT * FROM `job_seeker_details` ORDER BY id DESC LIMIT 5";
						$parttime_res = $conn->query($parttime);
						if ($parttime_res->num_rows > 0) {
							while ($row = $parttime_res->fetch_assoc()) {
								$pow = "";
								if ($row['place_of_work'] == "wfh") {
									$pow = 'Work From Home';
								} else {
									$pow = "In Office";
								}
								$id = $row['id'];
								$details_query = "SELECT * FROM `seeker_details` WHERE id='$id'";
								$details_res = $conn->query($details_query);
								while ($row2 = $details_res->fetch_assoc()) {
									$town = $row2['town'];
									$state = $row2['state'];
									$country = $row2['country'];
									$parttime_start = substr($row2['part_time_start'], 0, 5);
									$parttime_end = substr($row2['part_time_end'], 0, 5);
								}
								$a_tag = '';
								if (isset($_SESSION['recruiter_id'])) {
									$a_tag = '<a href="./profile/index.php?id=' . $id . '">
										<h4> Field - ' . $row['field'] . '</h4>
									</a>';
								} else {
									$a_tag = '<a href="./Register/recruiterLogin.php">
										<h4> Field - ' . $row['field'] . '</h4>
									</a>';
								}
								echo '<div class="single-post d-flex flex-row">
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">' . $a_tag . '
									<h6> Position - ' . $row['position'] . '</h6>
								</div>
							</div>
							<h5>Prefered Place of Work      :    ' . $pow . '</h5>
							<p>
								Working Hours : ' . $parttime_start . '  -  ' . $parttime_end . '
							</p>
							<p class="address"><span class="lnr lnr-map"></span>  ' . $town . ' , ' . $state . ' , ' . $state . '</p>
							<div class="thumb">
								<ul class="tags">
									<li>
										<a onclick="return false;">' . $row['field'] . '</a>
									</li>
									<li>
										<a onclick="return false;">Part Time</a>
									</li>
									<li>
										<a onclick="return false;">' . $row['position'] . '</a>
									</li>
									<li>
										<a onclick="return false;">' . $pow . '</a>
									</li>
								</ul>
							</div>
						</div>
						</div>';
							}
						}
						?>

						<a class="text-uppercase loadmore-btn mx-auto d-block" href="search.php?category=parttime">Load More part-time seekers</a>
					</div>



					<div class="tabContent" style="display:none" id='course'>
						<?php
						$course = "SELECT * FROM `course_details` ORDER BY  id DESC LIMIT 5";
						$course_res = $conn->query($course);
						if ($course_res->num_rows > 0) {
							while ($row = $course_res->fetch_assoc()) {
								$pow = "";
								if ($row['mode_of_learning'] == "online") {
									$pow = 'Online';
								} else {
									$pow = "At Coaching Center";
								}
								$id = $row['id'];
								$details_query = "SELECT * FROM `seeker_details` WHERE id='$id'";
								$details_res = $conn->query($details_query);
								while ($row2 = $details_res->fetch_assoc()) {
									$town = $row2['town'];
									$state = $row2['state'];
									$country = $row2['country'];
									$course_start = substr($row2['course_time_start'], 0, 5);
									$course_end = substr($row2['course_time_end'], 0, 5);
								}
								$a_tag = '';
								if (isset($_SESSION['recruiter_id'])) {
									$a_tag = '<a href="./profile/index.php?id=' . $id . '">
										<h4> Field - ' . $row['field'] . '</h4>
									</a>';
								} else {
									$a_tag = '<a href="./Register/recruiterLogin.php">
										<h4> Field - ' . $row['field'] . '</h4>
									</a>';
								}
								echo '<div class="single-post d-flex flex-row">
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									' . $a_tag . '
									<h6> Course - ' . $row['course'] . '</h6>
								</div>
							</div>
							<h5>Prefered Place of Study      :    ' . $pow . '</h5>
							<p>
								Dedicated Hours : ' . $course_start . '  -  ' . $course_end . '
							</p>
							<p class="address"><span class="lnr lnr-map"></span>  ' . $town . ' , ' . $state . ' , ' . $state . '</p>
							<div class="thumb">
								<ul class="tags">
									<li>
										<a onclick="return false;">' . $row['field'] . '</a>
									</li>
									<li>
										<a onclick="return false;">Course</a>
									</li>
									<li>
										<a onclick="return false;">' . $row['course'] . '</a>
									</li>
									<li>
										<a onclick="return false;">' . $pow . '</a>
									</li>
								</ul>
							</div>
						</div>
						</div>';
							}
						}
						?>
						<a class="text-uppercase loadmore-btn mx-auto d-block" href="search.php?category=course">Load More course seekers</a>
					</div>


					<div class="tabContent" style="display:none" id='ngo'>
						<?php
						$ngo = "SELECT * FROM `ngo_details` ORDER BY id DESC LIMIT 5";
						$ngo_res = $conn->query($ngo);
						if ($ngo_res->num_rows > 0) {
							while ($row = $ngo_res->fetch_assoc()) {
								$pow = "";
								if ($row['place_of_work'] == "wfh") {
									$pow = 'Work From Home';
								} else {
									$pow = "In Office";
								}
								$id = $row['id'];
								$details_query = "SELECT * FROM `seeker_details` WHERE id='$id'";
								$details_res = $conn->query($details_query);
								while ($row2 = $details_res->fetch_assoc()) {
									$town = $row2['town'];
									$state = $row2['state'];
									$country = $row2['country'];
									$ngo_start = substr($row2['ngo_time_start'], 0, 5);
									$ngo_end = substr($row2['ngo_time_end'], 0, 5);
								}
								$a_tag = '';
								if (isset($_SESSION['recruiter_id'])) {
									$a_tag = '<a href="./profile/index.php?id=' . $id . '">
										<h4> Field - ' . $row['field'] . '</h4>
									</a>';
								} else {
									$a_tag = '<a href="./Register/recruiterLogin.php">
										<h4> Field - ' . $row['field'] . '</h4>
									</a>';
								}
								echo '<div class="single-post d-flex flex-row">
						<div class="details">
							<div class="title d-flex flex-row justify-content-between">
								<div class="titles">
									' . $a_tag . '
									<h6> Position - ' . $row['position'] . '</h6>
								</div>
							</div>
							<h5>Prefered Place of Work      :    ' . $pow . '</h5>
							<p>
								Working Hours : ' . $ngo_start . '  -  ' . $ngo_end . '
							</p>
							<p class="address"><span class="lnr lnr-map"></span>  ' . $town . ' , ' . $state . ' , ' . $state . '</p>
							<div class="thumb">
								<ul class="tags">
									<li>
										<a onclick="return false;">' . $row['field'] . '</a>
									</li>
									<li>
										<a onclick="return false;">Volunteer</a>
									</li>
									<li>
										<a onclick="return false;">' . $row['position'] . '</a>
									</li>
									<li>
										<a onclick="return false;">' . $pow . '</a>
									</li>
								</ul>
							</div>
						</div>
						</div>';
							}
						}
						?>
						<a class="text-uppercase loadmore-btn mx-auto d-block" href="search.php?category=ngo
						">Load More NGO volunteers</a>
					</div>
				</div>

				<script>
					function openCategory(evt, categoryName) {
						// alert('clicked');
						var i, tabcontent, tablinks;
						tabcontent = document.getElementsByClassName("tabContent");
						for (i = 0; i < tabcontent.length; i++) {
							tabcontent[i].style.display = "none";
						}
						tablinks = document.getElementsByClassName("tablinks");
						for (i = 0; i < tablinks.length; i++) {
							tablinks[i].className = tablinks[i].className.replace(" active", "");
							tablinks[i].className = tablinks[i].className.replace(" clicked", "");

						}
						document.getElementById(categoryName).style.display = "block";
						evt.currentTarget.className += " active";
						evt.currentTarget.className += " clicked";
					}
				</script>

				<div class="col-lg-4 sidebar">

					<div class="single-slidebar">
						<h4>Part-time jobs seekers</h4>
						<ul class="cat-list">
							<?php
							$frequencies = array();
							$query = "SELECT field, COUNT(id) FROM job_seeker_details GROUP BY field ORDER BY COUNT(id) DESC";
							$res = $conn->query($query);
							if ($res->num_rows > 0) {
								while ($row = $res->fetch_assoc()) {
									$field = $row['field'];
									echo "
									<li><a class='justify-content-between d-flex' href='search.php?field=$field'>
									<p>" . $row['field'] . "</p><span>" . $row['COUNT(id)'] . "</span>
								</a></li>";
								}
							}

							?>

						</ul>
					</div>

					<div class="single-slidebar">
						<h4>Course seekers</h4>
						<ul class="cat-list">
							<?php
							$frequencies = array();
							$query = "SELECT field, COUNT(id) FROM course_details GROUP BY field ORDER BY COUNT(id) DESC";
							$res = $conn->query($query);
							if ($res->num_rows > 0) {
								while ($row = $res->fetch_assoc()) {
									$course = $row['field'];
									echo "
									<li><a class='justify-content-between d-flex' href='search.php?course=$course'>
									<p>" . $row['field'] . "</p><span>" . $row['COUNT(id)'] . "</span>
								</a></li>";
								}
							}

							?>

						</ul>
					</div>

					<div class="single-slidebar">
						<h4>NGO volunteers</h4>
						<ul class="cat-list">
							<?php
							$frequencies = array();
							$query = "SELECT field, COUNT(id) FROM ngo_details GROUP BY field ORDER BY COUNT(id) DESC";
							$res = $conn->query($query);
							if ($res->num_rows > 0) {
								while ($row = $res->fetch_assoc()) {
									$ngo_field = $row['field'];

									echo "
									<li><a class='justify-content-between d-flex' href='search.php?ngo=$ngo_field'>
									<p>" . $row['field'] . "</p><span>" . $row['COUNT(id)'] . "</span>
								</a></li>";
								}
							}

							?>

						</ul>
					</div>
					<div class="single-slidebar">
						<h4>Candidates by Location</h4>

						<ul class="cat-list">
							<?php
							$frequencies = array();
							$query = "SELECT town, COUNT(id) FROM seeker_details GROUP BY town ORDER BY COUNT(id) DESC";
							$res = $conn->query($query);
							if ($res->num_rows > 0) {
								while ($row = $res->fetch_assoc()) {
									$town = $row['town'];
									echo "
									<li><a class='justify-content-between d-flex' href='search.php?place=$town'>
									<p>" . $row['town'] . "</p><span>" . $row['COUNT(id)'] . "</span>
								</a></li>";
								}
							}

							?>
						</ul>
					</div>
					<div class="single-slidebar">
						<h4>Career Advice Blog</h4>
						<div class="blog-list">
							<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
								<a href="./blog-single.php">
									<h4>The web is working for <br>
										part-time businesses</h4>
								</a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>

								</div>
							</div>
							<div class="single-blog " style="background:#000 url(img/blog2.jpg);">
								<a href="./blog-course.php">
									<h4>The web is hosting for <br>
										Latest Demanding courses</h4>
								</a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>

								</div>
							</div>
							<div class="single-blog " style="background:#000 url(img/blog1.jpg);">
								<a href="./blog-hiring.php">
									<h4>The web is working on <br>
										Improving hiring process</h4>
								</a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
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


	<?php if (!(isset($_SESSION['id']) || isset($_SESSION['recruiter_id']))) { ?>
		<!-- Start callto-action Area -->
		<section class="callto-action-area section-gap" id="join">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content col-lg-9">
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
	<script type="text/javascript">
		$("#search1").on("keyup", function() {
			var search_term = $(this).val();
			if (search_term != '') {
				$.ajax({
					url: "live-search.php",
					type: "POST",
					data: {
						search: search_term
					},
					success: function(data) {
						$("#search-data").fadeIn();
						$("#search-data").html(data);
					}
				});
			} else {
				$("#search-data").fadeOut();
				$("#search-data").html("");

			}
		});
		$(document).on('click', 'li', function() {
			$("#search1").val($(this).text());
			$("#search-data").fadeOut();
		});
	</script>
</body>

</html>