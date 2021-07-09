<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="recruiterRegister.css">

    <link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="./seeker_details.css">
  
  <link rel="stylesheet" href="font-awesome.min.css">

    <title>Recruiter-Registeration </title>
</head>
<body>

<div id="overlay">
      <div class="loader"></div>
      </div>
      <script>
        $(window).on('load',function(){
        $(".loader").fadeOut();
        $("#overlay").delay(400).fadeOut("slow");
});
      </script>
      
    <header id="header" id="home" style="background-color: black;">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="../index.html"><img src="../img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="../index.html">Home</a></li>
						<li><a href="../about-us.html">About Us</a></li>
						<li><a href="../category.html">Category</a></li>
						<li><a href="../contact.html">Contact</a></li>
						<li class="menu-has-children"><a href=""style='color:#7b63f1'>Signup</a>
							<ul>
								
								<li><a href="recruiterRegister.php">As a recruiter</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href=""style='color:#7b63f1'>Login</a>
							<ul>
								
								<li><a href="recruiterLogin.php">As a recruiter</a></li>
							</ul>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
    <?php

    include 'dbcon.php';
    $username=$email=$phone=$password="";
        if(isset($_POST['submit'])){
            $username=mysqli_real_escape_string($con,$_POST['username']);
            $email=mysqli_real_escape_string($con,$_POST['email']);
            $phone=mysqli_real_escape_string($con,$_POST['phone']);
            $password=mysqli_real_escape_string($con,$_POST['password']);

            $pass = password_hash($password,PASSWORD_BCRYPT);

            $emailquery = "select * from recruiter where email='$email'";
            $query = mysqli_query($con,$emailquery);
            $emailcount = mysqli_num_rows($query);

            $phonequery = "select * from recruiter where phone='$phone'";
            $query1 = mysqli_query($con,$phonequery);
            $phonecount = mysqli_num_rows($query1);

            $userquery = "select * from recruiter where username='$username'";
            $query2 = mysqli_query($con,$userquery);
            $usercount = mysqli_num_rows($query2);

            if($usercount>0){
                header("Location: recruiterRegister.php?error=username already exists. Enter different username");
                exit();
            }
            else if($emailcount>0){
                header("Location: recruiterRegister.php?error=email already exists. Enter different email");
                exit();
            }
            else if($phonecount>0){
                header("Location: recruiterRegister.php?error=phone number already exists. Enter different phone number");
                exit();
            } 
            else{
                $insertquery = "insert into recruiter(username, email, phone, password) values ('$username','$email','$phone','$pass')";
                $iquery=mysqli_query($con,$insertquery);

                ?>
                    <script>
                    location.replace("recruiterLogin.php");
                    </script>
                    <?php
            }
            
           

        }
    ?>



    <div id="content" style="padding-bottom:188px;">
        <div class="registration_form" id="internship_form">
            <div id="content-inner" class="container-fluid">
                <div class="max-width-container">
                    <div id="registration-container">
                        <div id="registration-container-left">
                            <div id="job-registration-container-left" style="display: none">
                                <div class ="registration-content">
        <div class="registration-content-header heading_0_3">
            Hire the best freshers <br><span class="span-color">faster</span>
        </div>
        <div class="registration-content-price">
            Get 2x applications than any other portal in just 2 days
        </div>
    </div>
                            </div>
                            <div id="internship-registration-container-left" style="display: flex">
                                <div class ="registration-content">
        <h2 class="registration-content-header">
            Hire the best interns
        </h2>
        <div class="features_container_1">
            Register and post your internship for free now!
        </div>
        <div class="features_container_2">
            4 Lacs+ internships seekers from 10,000+ colleges across World
        </div>
    </div>
                            </div>
                        </div>
                        <div id="registration-container-right">
                            <div id="form-container">
                                <form autocomplete="off" role="form" id="registration-form" action="" method="POST" class="nofulltime-form">
                                <?php if (isset($_GET['error'])) { ?>
     		                    <p class="error"><?php echo $_GET['error']; ?></p>
     	                        <?php } ?>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Full Name</label>
                                        <input type="text" class="form-control" id="full_name" name="username" value="<?php echo $username; ?>" placeholder="Alex Roy" required>
                                    </div>
        <div class="form-group" >
            <label for="email" class="control-label">Official Email Id </label>
            <div data-toggle="popover"
                 data-content="<div class='email_popover_close'><i class='ic-24-cross'></i></div><div>An official id (example: <span style='color:#1295c9' class='email_example'>name@company_name.com</span>) is strongly recommended as it helps us verify that you represent the company and enables us to provide you a quick service. If you're a student, please register <a href='student.html' tabindex='20000'>here</a>.</div>"
                 id="email_desktop">
                <input type="email" class="form-control email-field-employer-registration" id="email" name="email" value="<?php echo $email; ?>" placeholder="name@company_name.com" required>
            </div>
            <p id="span_note" style="margin-left:2px;">
            </p>
        </div>
        <div class="form-group">
            <label for="phone" class="control-label">Phone Number(Enter with country code)</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="91-9784560213" value="<?php echo $phone; ?>" required>
        </div>
        <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Minimum 6 characters" value="<?php echo $password; ?>" required>
        </div>
        <div class="restricted_keyword_error registration_form" style="display: none;"></div>
    <div id="job_registration_form_extras" style="margin-top: 16px">
        <div class="label_toc">
            <span style='color: #333333; line-height: 1.57; font-weight: 400'>
                By registering, you agree to our <a href="" target="_blank">Terms and Conditions</a>.
            </span>
        </div>

        <div id="internship_registration_button_container" style="display: block">
            <div id="job_employer_registration_button">
                 <button type="submit" name="submit" class="btn btn-primary">Register Now</button>
            </div>
            <div class="label_toc_2">
                <a href="recruiterLogin.php" class="register_link">
                    <span id="job_toc">
                        Already Registered?
                    </span>
                    Login
                </a>
            </div>
        </div>

    </div>
</form>

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
							<li><a href="blog-home.html">Blog</a></li>
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
							<form target="_blank" novalidate="true"
								action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								method="get" class="form-inline">

								<div class="form-group row" style="width: 100%">
									<div class="col-lg-8 col-md-12">
										<input name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''"
											onblur="this.placeholder = 'Enter Email '" required="" type="email">
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
												type="text">
										</div>
									</div>

									<div class="col-lg-4 col-md-12">
										<button class="nw-btn primary-btn">Subscribe<span
												class="lnr lnr-arrow-right"></span></button>
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
					<script>document.write(new Date().getFullYear());
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



<script src="jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="bootstrap.min.js"></script>			
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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
</body>
</html>