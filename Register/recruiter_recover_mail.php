<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

  <title>Sending Mail </title>
</head>

<body>

  <?php

  $email = "";
  include 'dbcon.php';
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $emailquery = "select * from recruiter where email='$email'";
    $query = mysqli_query($con, $emailquery);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {

      $userdata = mysqli_fetch_array($query);

      $username = $userdata['username'];
      $token = $userdata['token'];

      $subject = "Password Reset";
      $body = "Hi, $username. Click on the below link to reset your password
        http://localhost/version1_web/Register/recruiter_reset_password.php?token=$token";
      $sender_email = "From: kevanmehta2511@gmail.com";

      if (mail($email, $subject, $body, $sender_email)) {
        $_SESSION['msg1'] = "check your mail to reset your password $email";
        header('location:recruiterLogin.php');
      } else {
        echo "email sending failed";
      }
    } else {
      echo "NO email found";
    }
  }

  ?>
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
                <li><a href="studentRegister.php">As a Part-timer</a></li>
              </ul>
            </li>
            <li class="menu-has-children" style='background-color:white'><a href="" style='color:#7b63f1'>Login</a>
              <ul>
                <li><a href="studentLogin.php">As a Part-timer</a></li>
              </ul>
            </li>
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header>
  <div class="container" style="padding-top:120px; padding-bottom:70px;">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Recover Your Account
          </h4>
          <h4 class="title text-center mt-4">
            Please enter email correctly.
          </h4>
          <form autocomplete="off" class="form-box px-3" action="" onsubmit="return validation()" method="POST">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" placeholder="Email Address" tabindex="10" value="<?php echo $email; ?>">
              <span id="emailerror" class="text-danger font-weight-bold"></span>
            </div>

            <div class="mb-3">
              <button type="submit" name="submit" class="btn btn-block text-uppercase">
                Send Mail
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
            </ul>
          </div>
        </div>
        <div class="col-lg-6  col-md-12">
          <div class="single-footer-widget newsletter">
            <h6>Other Links</h6>
            <ul class="footer-nav">
              <li><a href="../terms.php">Terms and Conditions</a></li>
              <li><a href="../contact.php">Contact</a></li>
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
  <script>
    function validation() {
      var email = document.getElementById("email").value;

      var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

      if (emailcheck.test(email)) {
        document.getElementById('emailerror').innerHTML = " ";

      } else {
        document.getElementById('emailerror').innerHTML = "** Email is incorrect";
        return false;

      }
    }
  </script>

</body>

</html>