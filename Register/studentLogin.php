<?php
	session_start();
	if(isset($_SESSION['logincust']))
	{
		header('Location: ../seeker_preferences.php');
	}
	else
	{
		session_unset();
	}
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

    <link rel="stylesheet" href="studentLogin.css">

    <link rel="stylesheet" href="../css/linearicons.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/nice-select.css">
	<link rel="stylesheet" href="../css/animate.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="./seeker_details.css">
  
  <link rel="stylesheet" href="font-awesome.min.css">

    <title>Student Login </title>
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
								<li><a href="studentRegister.php">As a Student</a></li>
								
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
  $email = $password="";

  include 'dbcon.php';
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from user where email='$email'";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass['password'];

      $_SESSION['id'] = $email_pass['id'];

      $pass_decode = password_verify($password,$db_pass);

      if($pass_decode){
        ?>
        <script>
          location.replace("studentRegister.php");
        </script>
        <?php

      }else{
        header("Location: studentLogin.php?error=Incorrect password");
        exit();
      }
    }else{
      header("Location: studentLogin.php?error=Incorrect email");
      exit();
    }
  

  }
?>    

    <div class="container" style="padding-top:70px; padding-bottom:70px;">
        <div class="row px-3">
          <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
            <div class="img-left d-none d-md-flex"></div>
    
            <div class="card-body">
                <h4 class="title text-center mt-4">
                    Welcome Back Student!
                  </h4>
              <h4 class="title text-center mt-4">
                Login into account
              </h4>
              <form autocomplete="off" class="form-box px-3" action="" method="POST" >
                <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	          <?php } ?>
                <div class="form-input">
                  <span><i class="fa fa-envelope-o"></i></span>
                  <input type="email" name="email" placeholder="Email Address" value="<?php echo $email; ?>" tabindex="10" required>
                </div>
                <div class="form-input">
                  <span><i class="fa fa-key"></i></span>
                  <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>" required>
                </div>
    
                 <!-- <div class="mb-3">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="cb1" name="">
                    <label class="custom-control-label" for="cb1">Remember me</label>
                  </div>
                </div> -->
    
                <div class="mb-3">
                  <button type="submit" name="submit" class="btn btn-block text-uppercase">
                    Login
                  </button>
                </div>
    
                <!-- <div class="text-right">
                  <a href="#" class="forget-link">
                    Forget Password?
                  </a>
                </div> -->
    
                <div class="text-center mb-3">
                  or login with
                </div>
    
                <div class="row mb-3">
                  <div class="col-6">

                    <?php 
                    

                    //index.php
                    
                    include('fconfig.php');
                    
                    $facebook_output = '';
                    
                    $facebook_helper = $facebook->getRedirectLoginHelper();
                    
                    if(isset($_GET['code']))
                    {
                     if(isset($_SESSION['access_token']))
                     {
                      $access_token = $_SESSION['access_token'];
                     }
                     else
                     {
                      $access_token = $facebook_helper->getAccessToken();
                    
                      $_SESSION['access_token'] = $access_token;
                    
                      $facebook->setDefaultAccessToken($_SESSION['access_token']);
                     }
                    
                     $_SESSION['user_id'] = '';
                     $_SESSION['user_name'] = '';
                     $_SESSION['user_email_address'] = '';
                     $_SESSION['user_image'] = '';
                    
                     $graph_response = $facebook->get("/me?fields=name,email", $access_token);
                    
                     $facebook_user_info = $graph_response->getGraphUser();
                    
                     if(!empty($facebook_user_info['id']))
                     {
                      $_SESSION['user_image'] = 'http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
                     }
                    
                     if(!empty($facebook_user_info['name']))
                     {
                      $_SESSION['user_name'] = $facebook_user_info['name'];
                     }
                    
                     if(!empty($facebook_user_info['email']))
                     {
                      $_SESSION['user_email_address'] = $facebook_user_info['email'];
                     }
                     
                    }
                    else
                    {
                     // Get login url
                        $facebook_permissions = ['email']; // Optional permissions
                    
                        $facebook_login_url = $facebook_helper->getLoginUrl('http://localhost/version1_web-main/Register/studentLogin.php', $facebook_permissions);
                        
                        // Render Facebook login button
                        $facebook_login_url = '<a href="'.$facebook_login_url.'" class="btn btn-block btn-social btn-facebook">Facebook</a>';
                        echo $facebook_login_url;
                    }
                    
                    
                    
                    ?>
                  
                  </div> 

    
                  <div class="col-6">
                    <?php
include_once 'gconfig2.php';
if(isset($_GET['code'])){
  $gClient->authenticate($_GET['code']);
  $_SESSION['token'] = $gClient->getAccessToken();
  header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['token'])) {
  $gClient->setAccessToken($_SESSION['token']);
}
if ($gClient->getAccessToken()) 
{
  $gpUserProfile = $google_oauthV2->userinfo->get(); 
  $_SESSION['oauth_uid'] = $gpUserProfile['id']; 
  $_SESSION['first_name'] = $gpUserProfile['given_name']; 
  $_SESSION['last_name'] = $gpUserProfile['family_name']; 
  $_SESSION['email'] = $gpUserProfile['email'];
  $_SESSION['logincust']='yes';
} else {
  $authUrl = $gClient->createAuthUrl();
  $output= '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'" class="btn btn-block btn-social btn-google">Google</a>';
}
echo $output;

?>
                  </div>
    
                </div>
    
                <hr class="my-4">
    
                <div class="text-center mb-2">
                  Don't have an account?
                  <a href="studentRegister.php" class="register-link">
                    Register here
                  </a>
                </div>
              </form>
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