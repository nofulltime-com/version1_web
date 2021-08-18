<?php
session_start();
include './connect.php'
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
	<title>No Full Time | Search</title>
	<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
	<link rel="stylesheet" href="css/filter_style.css">
</head>

<?php

// $_SESSION = $_SERVER['HTTP_HOST'];
if (isset($_POST['submit'])) {
	$url = $_POST['url'];
	$loc_fil = $_POST['location'];
	$pos_fil = $_POST['pos'];
	$gen_fil = $_POST['gender'];
	$work_fil = $_POST['working'];
	$hours_fil = $_POST['hours'];
	if ($loc_fil != null)
		$url = $url . "&loc=" . $loc_fil;
	if ($pos_fil != null)
		$url = $url . "&pos=" . $pos_fil;
	if ($gen_fil != null)
		$url = $url . "&gen=" . $gen_fil;
	if ($work_fil != null)
		$url = $url . "&work=" . $work_fil;
	if ($hours_fil != null)
		$url = $url . "&hours=" . $hours_fil;
	echo "<script>location.replace('$url')</script>";
}
?>

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
			<div class="row search-page-top d-flex align-items-center justify-content-center">
				<div class="banner-content col-lg-12">
					<h1 class="text-white">
						Search Results
					</h1>
					<p class="text-white link-nav">
						<a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="search.php">
							Search Page</a>
					</p>
					<form action="#" class="serach-form-area">
						<div class="row justify-content-center form-wrap">
							<div class="col-lg-4 form-cols">
								<input type="text" class="form-control" name="search" placeholder="what are you looging for?">
							</div>
							<div class="col-lg-3 form-cols">
								<div class="default-select" id="default-selects"">
											<select>
												<option value=" 1">Select area</option>
									<option value="2">Dhaka</option>
									<option value="3">Rajshahi</option>
									<option value="4">Barishal</option>
									<option value="5">Noakhali</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 form-cols">
								<div class="default-select" id="default-selects2">
									<select>
										<option value="1">All Category</option>
										<option value="2">Medical</option>
										<option value="3">Technology</option>
										<option value="4">Goverment</option>
										<option value="5">Development</option>
									</select>
								</div>
							</div>
							<div class="col-lg-2 form-cols">
								<button type="button" class="btn btn-info">
									<span class="lnr lnr-magnifier"></span> Search
								</button>
							</div>
						</div>
					</form>
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
					<div class="title text-center">
						<h1 class="mb-10">Search Results</h1>
					</div>
					<?php if (isset($_GET['place'])) {
						$place = $_GET['place']
					?>
						<ul class="cat-list">
							<li class="tablinks clicked" onclick="openCategory(event, 'parttime')"><a>part Time</a></li>
							<li class="tablinks" onclick="openCategory(event, 'course')"><a>Courses</a></li>
							<li class="tablinks" onclick="openCategory(event, 'ngo')"><a>NGO</a></li>
						</ul>
						<div class="tabContent" style="display:block" id='parttime'>
							<?php

							$details_query = "SELECT * FROM `seeker_details` WHERE town='$place'";
							$details_res = $conn->query($details_query);
							while ($row2 = $details_res->fetch_assoc()) {
								$id = $row2['id'];
								$town = $row2['town'];
								$state = $row2['state'];
								$country = $row2['country'];
								$parttime_start = substr($row2['part_time_start'], 0, 5);
								$parttime_end = substr($row2['part_time_end'], 0, 5);
								if (isset($_GET['loc'])) {
									$loc = $_GET['loc'];
									// echo "<script>console.log('$town')</script>";
									if (strtolower($loc) != strtolower($town)) {
										continue;
									}
								}
								if (isset($_GET['gen'])) {
									$gen = $_GET['gen'];
									if ($gen2 != $gen)
										continue;
								}
								if (isset($_GET['work'])) {
									$work = $_GET['work'];
									if ($work == "morning") {

										if ((strtotime($parttime_start) < strtotime('00:00:00')) or (strtotime($parttime_start) > strtotime('15:00:00')))
											continue;
									}
									if ($work == "evening")
										if ((strtotime($parttime_start) < strtotime('15:00:00')) or (strtotime($parttime_start) >= strtotime('19:00:00')))
											continue;
									if ($work == "night")
										if ((strtotime($parttime_start) < strtotime('19:00:00')) or (strtotime($parttime_start) > strtotime('24:00:00')))
											continue;
								}
								if (isset($_GET['hours'])) {
									$diff = (strtotime($parttime_end) - strtotime($parttime_start)) / 3600;
									// echo "<script>console.log('$diff')</script>";
									if ($diff < $_GET['hours'])
										continue;
								}
								$parttime = "SELECT * FROM `job_seeker_details` WHERE id='$id'";
								$parttime_res = $conn->query($parttime);
								if ($parttime_res->num_rows > 0) {
									while ($row = $parttime_res->fetch_assoc()) {
										$pow = "";
										if ($row['place_of_work'] == "wfh") {
											if (isset($_GET['pos'])) {
												if (!$_GET['pos'] == "online")
													continue;
											}
											$pow = 'Work From Home';
										} else {
											if (isset($_GET['pos'])) {
												if (!$_GET['pos'] == "offline")
													continue;
											}
											$pow = "In Office";
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
							}
							?>
						</div>

						<div class="tabContent" style="display:none" id='course'>
							<?php
							$details_query = "SELECT * FROM `seeker_details` WHERE town='$place'";
							$details_res = $conn->query($details_query);
							while ($row2 = $details_res->fetch_assoc()) {
								$id = $row2['id'];
								$town = $row2['town'];
								$state = $row2['state'];
								$country = $row2['country'];
								$course_start = substr($row2['course_time_start'], 0, 5);
								$course_end = substr($row2['course_time_end'], 0, 5);
								if (isset($_GET['loc'])) {
									$loc = $_GET['loc'];
									// echo "<script>console.log('$town')</script>";
									if (strtolower($loc) != strtolower($town)) {
										continue;
									}
								}
								if (isset($_GET['gen'])) {
									$gen = $_GET['gen'];
									if ($gen2 != $gen)
										continue;
								}
								if (isset($_GET['work'])) {
									$work = $_GET['work'];
									if ($work == "morning") {

										if ((strtotime($course_start) < strtotime('00:00:00')) or (strtotime($course_start) > strtotime('15:00:00')))
											continue;
									}
									if ($work == "evening")
										if ((strtotime($course_start) < strtotime('15:00:00')) or (strtotime($course_start) >= strtotime('19:00:00')))
											continue;
									if ($work == "night")
										if ((strtotime($course_start) < strtotime('19:00:00')) or (strtotime($course_start) > strtotime('24:00:00')))
											continue;
								}
								if (isset($_GET['hours'])) {
									$diff = (strtotime($course_end) - strtotime($course_start)) / 3600;
									// echo "<script>console.log('$diff')</script>";
									if ($diff < $_GET['hours'])
										continue;
								}
								$course = "SELECT * FROM `course_details` WHERE id='$id'";
								$course_res = $conn->query($course);
								if ($course_res->num_rows > 0) {
									while ($row = $course_res->fetch_assoc()) {
										$pow = "";
										if ($row['mode_of_learning'] == "online") {
											if (isset($_GET['pos'])) {
												if ($_GET['pos'] != "online")
													continue;
											}
											$pow = 'Online';
										} else {
											if (isset($_GET['pos'])) {
												if ($_GET['pos'] != "offline")
													continue;
											}
											$pow = "At Coaching Center";
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
							}

							?>
						</div>


						<div class="tabContent" style="display:none" id='ngo'>
							<?php
							$details_query = "SELECT * FROM `seeker_details` WHERE town='$place'";
							$details_res = $conn->query($details_query);
							while ($row2 = $details_res->fetch_assoc()) {
								$id = $row2['id'];
								$town = $row2['town'];
								$state = $row2['state'];
								$country = $row2['country'];
								$ngo_start = substr($row2['ngo_time_start'], 0, 5);
								$ngo_end = substr($row2['ngo_time_end'], 0, 5);
								if (isset($_GET['loc'])) {
									$loc = $_GET['loc'];
									// echo "<script>console.log('$town')</script>";
									if (strtolower($loc) != strtolower($town)) {
										continue;
									}
								}
								if (isset($_GET['gen'])) {
									$gen = $_GET['gen'];
									if ($gen2 != $gen)
										continue;
								}
								if (isset($_GET['work'])) {
									$work = $_GET['work'];
									if ($work == "morning") {

										if ((strtotime($ngo_start) < strtotime('00:00:00')) or (strtotime($ngo_start) > strtotime('15:00:00')))
											continue;
									}
									if ($work == "evening")
										if ((strtotime($ngo_start) < strtotime('15:00:00')) or (strtotime($ngo_start) >= strtotime('19:00:00')))
											continue;
									if ($work == "night")
										if ((strtotime($ngo_start) < strtotime('19:00:00')) or (strtotime($ngo_start) > strtotime('24:00:00')))
											continue;
								}
								if (isset($_GET['hours'])) {
									$diff = (strtotime($ngo_end) - strtotime($ngo_start)) / 3600;
									// echo "<script>console.log('$diff')</script>";
									if ($diff < $_GET['hours'])
										continue;
								}
								$ngo = "SELECT * FROM `ngo_details` WHERE id='$id'";
								$ngo_res = $conn->query($ngo);
								if ($ngo_res->num_rows > 0) {
									while ($row = $ngo_res->fetch_assoc()) {
										$pow = "";
										if ($row['place_of_work'] == "wfh") {
											if (isset($_GET['pos'])) {
												if ($_GET['pos'] != "online")
													continue;
											}
											$pow = 'Work From Home';
										} else {
											if (isset($_GET['pos'])) {
												if ($_GET['pos'] != "offline")
													continue;
											}
											$pow = "In Office";
										}
										if (isset($_GET['pos'])) {
											if (!$_GET['pos'] == "online")
												continue;
										}
										$id = $row['id'];

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
							}

							?>
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

					<?php } ?>


					<div>
						<?php
						$field = $_GET['field'];
						$parttime = "SELECT * FROM `job_seeker_details` WHERE field='$field'";
						$parttime_res = $conn->query($parttime);
						if ($parttime_res->num_rows > 0) {

							while ($row = $parttime_res->fetch_assoc()) {
								$pow = "";
								if ($row['place_of_work'] == "wfh") {
									if (isset($_GET['pos'])) {

										if ($_GET['pos'] != "online") {
											continue;
										}
									}
									$pow = 'Work From Home';
								} else {
									if (isset($_GET['pos'])) {
										if ($_GET['pos'] != "offline") {
											// echo "<script>console.log('Hey')</script>";
											continue;
										}
									}
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
									$gen2 = $row2['gender'];
								}
								if (isset($_GET['loc'])) {
									$loc = $_GET['loc'];

									if (strtolower($loc) != strtolower($town)) {
										continue;
									}
								}
								if (isset($_GET['gen'])) {
									$gen = $_GET['gen'];
									if ($gen2 != $gen)
										continue;
								}
								if (isset($_GET['work'])) {
									$work = $_GET['work'];
									if ($work == "morning") {

										if ((strtotime($parttime_start) < strtotime('00:00:00')) or (strtotime($parttime_start) > strtotime('15:00:00')))
											continue;
									}
									if ($work == "evening")
										if ((strtotime($parttime_start) < strtotime('15:00:00')) or (strtotime($parttime_start) >= strtotime('19:00:00')))
											continue;
									if ($work == "night")
										if ((strtotime($parttime_start) < strtotime('19:00:00')) or (strtotime($parttime_start) > strtotime('24:00:00')))
											continue;
								}
								if (isset($_GET['hours'])) {
									$diff = (strtotime($parttime_end) - strtotime($parttime_start)) / 3600;

									if ($diff < $_GET['hours'])
										continue;
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

					</div>
					<div class="container mt-5" id="no-result" style="display:none">
						<div class="no-result text-center bold mt-5">
							<h1 class="mt-5">No Records Found!!</h1>
						</div>
					</div>
					<div>
						<?php
						$course_field = $_GET['course'];
						$course = "SELECT * FROM `course_details` WHERE field='$course_field'";
						$course_res = $conn->query($course);
						if ($course_res->num_rows > 0) {
							while ($row = $course_res->fetch_assoc()) {
								$pow = "";
								if ($row['mode_of_learning'] == "online") {
									if (isset($_GET['pos'])) {
										if ($_GET['pos'] != "online")
											continue;
									}
									$pow = 'Online';
								} else {
									if (isset($_GET['pos'])) {
										if ($_GET['pos'] != "offline")
											continue;
									}
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
									$gen2 = $row2['gender'];
								}
								if (isset($_GET['loc'])) {
									$loc = $_GET['loc'];
									// echo "<script>console.log('$town')</script>";
									if (strtolower($loc) != strtolower($town)) {
										continue;
									}
								}
								if (isset($_GET['gen'])) {
									$gen = $_GET['gen'];
									if ($gen2 != $gen)
										continue;
								}
								if (isset($_GET['work'])) {
									$work = $_GET['work'];
									if ($work == "morning") {

										if ((strtotime($course_start) < strtotime('00:00:00')) or (strtotime($course_start) > strtotime('15:00:00')))
											continue;
									}
									if ($work == "evening")
										if ((strtotime($course_start) < strtotime('15:00:00')) or (strtotime($course_start) >= strtotime('19:00:00')))
											continue;
									if ($work == "night")
										if ((strtotime($course_start) < strtotime('19:00:00')) or (strtotime($course_start) > strtotime('24:00:00')))
											continue;
								}
								if (isset($_GET['hours'])) {
									$diff = (strtotime($course_end) - strtotime($course_start)) / 3600;
									// echo "<script>console.log('$diff')</script>";
									if ($diff < $_GET['hours'])
										continue;
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
					</div>


					<div>
						<?php
						$ngo_field = $_GET['ngo'];
						$ngo = "SELECT * FROM `ngo_details` WHERE field='$ngo_field'";
						$ngo_res = $conn->query($ngo);

						if ($ngo_res->num_rows > 0) {
							while ($row = $ngo_res->fetch_assoc()) {
								$pow = "";
								if ($row['place_of_work'] == "wfh") {
									if (isset($_GET['pos'])) {
										if ($_GET['pos'] != "online")
											continue;
									}
									$pow = 'Work From Home';
								} else {
									if (isset($_GET['pos'])) {
										if ($_GET['pos'] != "offline")
											continue;
									}
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
								if (isset($_GET['loc'])) {
									$loc = $_GET['loc'];
									// echo "<script>console.log('$town')</script>";
									if (strtolower($loc) != strtolower($town)) {
										continue;
									}
								}
								if (isset($_GET['gen'])) {
									$gen = $_GET['gen'];
									if ($gen2 != $gen)
										continue;
								}
								if (isset($_GET['work'])) {
									$work = $_GET['work'];
									if ($work == "morning") {

										if ((strtotime($ngo_start) < strtotime('00:00:00')) or (strtotime($ngo_start) > strtotime('15:00:00')))
											continue;
									}
									if ($work == "evening")
										if ((strtotime($ngo_start) < strtotime('15:00:00')) or (strtotime($ngo_start) >= strtotime('19:00:00')))
											continue;
									if ($work == "night")
										if ((strtotime($ngo_start) < strtotime('19:00:00')) or (strtotime($ngo_start) > strtotime('24:00:00')))
											continue;
								}
								if (isset($_GET['hours'])) {
									$diff = (strtotime($ngo_end) - strtotime($ngo_start)) / 3600;
									// echo "<script>console.log('$diff')</script>";
									if ($diff < $_GET['hours'])
										continue;
								}
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
					</div>

				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-3 sidebar fiter">
					<div class="single-slidebar">
						<div class="filter_head justify-content-between">
							<h3>Apply Filters</h3>
						</div>
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
							<div class="filter-box">
								<?php
								if (!isset($_GET['place'])) {
								?>
									<div class="firstFilter mt-4">
										<div class="location1 justify-content-between ">
											<h5>Select City</h5>
										</div>
										<input list="search-data" name="location" class="default-select" type="text" id="search1" placeholder="Enter location" autocomplete="off">
										<div id="search-data">
										</div>
									</div>
								<?php } ?>

								<div class="position_filter container mt-4">
									<div class="position1 justify-content-between ">
										<h5>Select Work Place</h5>
									</div>
									<div id="inner-filter justify-content-between ">
										<input type="radio" id="online" name="pos" class="gender_radio" value="online">
										<label for="online">ON-LINE (Work From Home)</label><br>
										<input type="radio" id="offline" name="pos" class="gender_radio" value="offline">
										<label for="offline">OFF-LINE</label><br>
									</div>


								</div>
								<div class="container mt-4">
									<div class="gender1">
										<h5>Select Gender</h5>
									</div>
									<div class="gender2">
										<input type="radio" id="male" name="gender" class="gender_radio" value="male">
										<label for="male">MALE</label><br>
										<input type="radio" id="female" name="gender" class="gender_radio" value="female">
										<label for="female">FEMALE</label><br>
										<input type="radio" id="other" name="gender" class="gender_radio" value="other">
										<label for="other">OTHER</label>
									</div>
								</div>
								<div class="working_hours mt-4">
									<div class="working1">
										<h5>Select Part-time Hours</h5>
									</div>
									<div class="working2">

										<input type="radio" id="morning" name="working" value="morning">
										<label for="morning">MORNING (00:00 - 15:00)</label><br>
										<input type="radio" id="evening" name="working" value="evening">
										<label for="evening">EVENING (15:00 - 19:00)</label><br>
										<input type="radio" id="night" name="working" value="night">
										<label for="night">NIGHT (19:00 - 24:00)</label>

									</div>
									<div class="hours mt-4">
										<div class="working1">
											<h5>Number of hours</h5>
										</div>
										<input type="number" name="hours" class="default-select" placeholder="Enter no. of working hours" autocomplete="off">
										<br>
										<br>
									</div>
									<input type="hidden" name="url" id="url">
									<script>
										document.getElementById("url").value = window.location.href;
									</script>
									<div class="col-lg-12 form-cols" id="submit-btn">
										<button type="submit" class="btn btn-info apply-btn" name="submit">
											<span class="lnr lnr-magnifier"></span> APPLY
										</button>
									</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- End post Area -->



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
		$("#position1").on("keyup", function() {
			var search_term = $(this).val();
			if (search_term != '') {
				$.ajax({
					url: "search_filters.php",
					type: "POST",
					data: {
						search: search_term
					},
					success: function(data) {
						$("#position-data").fadeIn();
						$("#position-data").html(data);
					}
				});
			} else {
				$("#position-data").fadeOut();
				$("#position-data").html("");

			}
		});
		$(".position_filter").on('click', 'li', function() {

			$("#position1").val($(this).text());
			$("#position-data").fadeOut();
		});
	</script>
	<script type="text/javascript">
		if ($(".single-post")[0]) {
			// Do something if class exists
		} else {
			// Do something if class does not exist
			document.getElementById("no-result").style.display = "block";
		}

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
		$(".firstFilter").on('click', 'li', function() {
			$("#search1").val($(this).text());
			$("#search-data").fadeOut();
		});
	</script>
</body>

</html>