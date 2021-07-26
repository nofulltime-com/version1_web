<?php
session_start();
// if (isset($_SESSION['logincust'])) {
//   header('Location: ../recruiters.php');
// } else {
//   session_unset();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="recruiterLogin.css">

  <link rel="stylesheet" href="../css/linearicons.css">
  <link rel="stylesheet" href="../css/magnific-popup.css">
  <link rel="stylesheet" href="../css/nice-select.css">
  <link rel="stylesheet" href="../css/animate.min.css">
  <link rel="stylesheet" href="../css/owl.carousel.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="./seeker_details.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="font-awesome.min.css">

  <title>Recruiter Login </title>
</head>

<body>
  <div id="overlay">
    <div class="loader"></div>
  </div>
  <script>
    $(window).on('load', function() {
      $(".loader").fadeOut();
      $("#overlay").delay(400).fadeOut("slow");
    });
  </script>

  <header id="header" id="home" style="background-color: black;">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a style="color:white ;font-size: x-large;font-weight:bold" href="../index.php"><span><i class="fas fa-dove"></i></span> Nofulltime</a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li class="menu-active"><a href="../index.php">Home</a></li>
            <li><a href="../about-us.php">About Us</a></li>
            <li><a href="../blog-home.php">Blogs</a></li>
            <li><a href="../contact.php">Contact</a></li>
            <li class="menu-has-children" style='background-color:white'><a href="" style='color:#7b63f1'>Signup</a>
              <ul>
                <li><a href="recruiterRegister.php">As a recruiter</a></li>
              </ul>
            </li>
            <li class="menu-has-children" style='background-color:white'><a href="" style='color:#7b63f1'>Login</a>
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

  $email = $password = "";
  include 'dbcon.php';
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from recruiter where email='$email'";
    $query = mysqli_query($con, $email_search);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {
      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass['password'];

      $_SESSION['recruiter_id'] = $email_pass['id'];

      $pass_decode = password_verify($password, $db_pass);

      if ($pass_decode) {
        setcookie("email", $email, time() +
          (3 * 24 * 60 * 60));
        setcookie("password", $password, time() +
          (3 * 24 * 60 * 60));
  ?>
        <script>
          location.replace("../recruiters.php");
        </script>
  <?php

      } else {
        header("Location: recruiterLogin.php?error=Incorrect password");
        exit();
      }
    } else {
      header("Location: recruiterLogin.php?error=Incorrect email");
      exit();
    }
  }
  ?>
  <div class="container" style="padding-top:120px; padding-bottom:70px;">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Welcome Back Recruiter!
          </h4>
          <h4 class="title text-center mt-4">
            Login into account
          </h4>

          <div>
            <p class="bg-success text-white px-4"><?php

            if (isset($_SESSION['msg1'])) {
                echo $_SESSION['msg1'];
            } else {
                echo $_SESSION['msg1'] = " ";
            }

            ?></p>
          </div>

          <form autocomplete="off" class="form-box px-3" onsubmit="return validation()" action="" method="POST">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" id="email" placeholder="Email Address" tabindex="10" value="<?php echo $email; ?>">

            </div>
            <span id="emailerror" class="text-danger font-weight-bold"></span>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>">

            </div>
            <span id="passerror" class="text-danger font-weight-bold"></span>
            <div class="mb-3">
              <button type="submit" name="submit" class="btn btn-block text-uppercase">
                Login
              </button>
            </div>

            <div class="text-right">
              <a href="recruiter_recover_mail.php" class="forget-link">
                Forget Password?
              </a>
            </div>

            <div class="text-center mb-3">
              or login with
            </div>

            <div class="row mb-3">
              <div class="col-6">
                <?php
                include('fconfig2.php');

                $facebook_output = '';

                $facebook_helper = $facebook->getRedirectLoginHelper();

                if (isset($_GET['code'])) {
                  if (isset($_SESSION['access_token'])) {
                    $access_token = $_SESSION['access_token'];
                  } else {
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

                  if (!empty($facebook_user_info['id'])) {
                    $_SESSION['user_image'] = 'http://graph.facebook.com/' . $facebook_user_info['id'] . '/picture';
                  }

                  if (!empty($facebook_user_info['name'])) {
                    $_SESSION['user_name'] = $facebook_user_info['name'];
                  }

                  if (!empty($facebook_user_info['email'])) {
                    $_SESSION['user_email_address'] = $facebook_user_info['email'];
                  }
                } else {
                  // Get login url
                  $facebook_permissions = ['email']; // Optional permissions

                  $facebook_login_url = $facebook_helper->getLoginUrl('http://localhost/version1_web/Register/recruiterLogin.php', $facebook_permissions);

                  // Render Facebook login button
                  $facebook_login_url = '<a href="' . $facebook_login_url . '" class="btn btn-block btn-social btn-facebook">Facebook</a>';
                  echo $facebook_login_url;
                }
                ?>
              </div>

              <div class=" col-6">

                <?php
                include_once 'gconfig.php';
                if (isset($_GET['code'])) {
                  $gClient->authenticate($_GET['code']);
                  $_SESSION['token'] = $gClient->getAccessToken();
                  header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
                }
                if (isset($_SESSION['token'])) {
                  $gClient->setAccessToken($_SESSION['token']);
                }
                if ($gClient->getAccessToken()) {
                  $gpUserProfile = $google_oauthV2->userinfo->get();
                  $_SESSION['oauth_uid'] = $gpUserProfile['id'];
                  $_SESSION['first_name'] = $gpUserProfile['given_name'];
                  $_SESSION['last_name'] = $gpUserProfile['family_name'];
                  $_SESSION['email'] = $gpUserProfile['email'];
                  $_SESSION['logincust'] = 'yes';
                } else {
                  $authUrl = $gClient->createAuthUrl();
                  $output = '<a href="' . filter_var($authUrl, FILTER_SANITIZE_URL) . '" class="btn btn-block btn-social btn-google">Google</a>';
                }
                echo $output;

                ?>
              </div>

            </div>

            <hr class="my-4">

            <div class="text-center mb-2">
              Don't have an account?
              <a href="recruiterRegister.php" class="register-link">
                Register here
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    function validation() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      var passcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
      var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

      if (emailcheck.test(email)) {
        document.getElementById('emailerror').innerHTML = " ";

      } else {
        document.getElementById('emailerror').innerHTML = "** Email is incorrect";
        return false;
      }
      if (passcheck.test(password)) {
        document.getElementById('passerror').innerHTML = " ";

      } else {
        document.getElementById('passerror').innerHTML = "** Password is incorrect. Please enter atleast one uppercase, one lowercase and minimum 6 characters";
        return false;
      }
    }
  </script>

  <footer class="footer-area section-gap">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-12">
          <div class="single-footer-widget">
            <h6>Short Links</h6>
            <ul class="footer-nav">
              <li><a href="../index.php">Home</a></li>
              <li><a href="../about-us.php">About Us</a></li>
              <li><a href="../blog-home.php">Blogs</a></li>
              <li><a href="../recruiters.php">Recruiters</a></li>
              <li><a href="../blog-home.php">Blog</a></li>
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