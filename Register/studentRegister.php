<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script> -->
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="studentRegister.css">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="font-awesome.min.css">

    <link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="./seeker_details.css">

    <title>Student-Registeration </title>
</head>
<body>

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
								<li><a href="studentRegister.html">As a Student</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a href=""style='color:#7b63f1'>Login</a>
							<ul>
								<li><a href="studentLogin.php">As a Student</a></li>
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

            $emailquery = "select * from user where email='$email'";
            $query = mysqli_query($con,$emailquery);
            $emailcount = mysqli_num_rows($query);

            $userquery = "select * from user where username='$username'";
            $query1 = mysqli_query($con,$userquery);
            $usercount = mysqli_num_rows($query1);

            $phonequery = "select * from user where phone='$phone'";
            $query2 = mysqli_query($con,$phonequery);
            $phonecount = mysqli_num_rows($query2);

            if($usercount>0){
                header("Location: studentRegister.php?error=username already exists. Enter different username");
                exit();
            }
            else if($emailcount>0){
                header("Location: studentRegister.php?error=email already exists. Enter different email");
                exit();
            }
            else if($phonecount>0){
                header("Location: studentRegister.php?error=phone number already exists. Enter different phone number");
                exit();
            }
            else{
                $insertquery = "insert into user(username, email, phone, password) values ('$username','$email','$phone','$pass')";
                $iquery=mysqli_query($con,$insertquery);
                ?>
                    <script>
                    location.replace("studentLogin.php");
                    </script>
                    <?php

            }
            
        }
    ?>


  <div class="container-fluid" id="content" style="padding-bottom: 467px;">
    <div id="content-inner"style="min-height:352px;">
        <div class="max-width-container">
            <div id="registration-container">
                <div id="registration-container-left">
                    <div class="registration-content">
                        <div class="heading_0">
                            A <span id="free_text"> free </span> ride to your dream career
                        </div>
                        <h3 class="d-none d-md-block">Register and apply to 1000+ opportunities</h3>
                        <div class="features_container">
                            
                            <div class="feature">
                                <img src="check_box.svg">
                                <h4>Part Time Internships</h4>
                            </div>
                            <div class="feature">
                                <img src="check_box.svg">
                                <h4>Work from home internships</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="registration-container-right">

                                        <div id="form-container">
                                       
                        
                        <form role="form" autocomplete="off" id="registration-form" action="" method="POST">
                            <?php if (isset($_GET['error'])) { ?>
     		                <p class="error"><?php echo $_GET['error']; ?></p>
     	                    <?php } ?>
                            <div class="form-group ">
                              <label for="username" class="control-label">Username</label>
                              <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>"  placeholder="John" required>
                              
                          </div>
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input type="email" class="form-control email-field-student-registration" id="email" name="email" value="<?php echo $email; ?>"  placeholder="john@example.com" required>
                                
                            </div>
                            <div class="form-group">
                                <label for="phone" class="control-label">Phone Number(Enter with Country Code)</label>
                                <input type="phone" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>"  placeholder="91-9547861234" required>
                                
                            </div>
                            <div class="form-group ">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>"  placeholder="Must be atleast 6 characters" required>
                                
                            </div>
                            
                            <div id="label_toc">
                                By signing up, you agree to our <a href="" target="_blank">Terms and Conditions</a>.
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
                        </form>
                        <div id="login-link-container">Already registered?
                            <a href="studentLogin.php"><span data-toggle="modal" data-target="#login-modal">
                                Login
                            </span></a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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