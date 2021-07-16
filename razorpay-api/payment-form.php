<?php
$aCGST = "9%";
$bSGST = "9%";
$total_Amount = " ";
if (isset($_POST['calculate'])) {
    $amount = $_POST['Amount'];

    $aCGST = $amount * 9 / 100;
    $bSGST = $amount * 9 / 100;
    $total_Amount = $amount + $aCGST + $bSGST;
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

    <title>Payment Gateway </title>
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
                    <a href="index.php" style="font-size:25px;color:white;font-weight: bold;">NO FULL TIME</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="../index.php">Home</a></li>
                        <li><a href="../about-us.php">About Us</a></li>
                        <li><a href="../category.php">Category</a></li>
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



    <div id="content">
        <div class="registration_form" id="internship_form">
            <div id="content-inner" class="container-fluid">
                <div class="max-width-container">
                    <div id="registration-container">
                        <div id="registration-container-left">
                            <div id="job-registration-container-left" style="display: none">
                                <div class="registration-content">
                                    <div class="registration-content-header heading_0_3">
                                        Hire the best freshers <br><span class="span-color">faster</span>
                                    </div>
                                    <div class="registration-content-price">
                                        Get 2x applications than any other portal in just 2 days
                                    </div>
                                </div>
                            </div>
                            <div id="internship-registration-container-left" style="display: flex">
                                <div class="registration-content">
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
                                <form autocomplete="off" role="form" id="registration-form" onsubmit="return validation()" action="./pay.php" method="POST" class="nofulltime-form">
                                    <?php if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                    <div class="form-group">
                                        <label class="control-label">Recruiter Id</label>
                                        <input type="text" class="form-control" id="Recruiter_Id" name="Recruiter_Id" value="" placeholder="1982376450">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Amount </label>
                                        <input type="text" class="form-control" id="Amount" name="Amount" value="" placeholder="1982">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Total Amount </label>
                                        <input type="text" class="form-control" id="Total_Amount" name="Total_Amount" value="<?php echo ($total_Amount); ?>" placeholder="19820">
                                    </div>
                                    <div class="restricted_keyword_error registration_form" style="display: none;"></div>
                                    <div id="job_registration_form_extras" style="margin-top: 16px">
                                        <div id="job_employer_registration_button">
                                            <button type="submit" name="submit" class="btn btn-primary">Pay Now</button>
                                        </div>
                                    </div>
                                </form>
                                <form autocomplete="off" role="form" id="registration-form" onsubmit="return validation()" action="" method="POST" class="nofulltime-form">
                                    <?php if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                    <div class="form-group">
                                        <label class="control-label">Amount </label>
                                        <input type="text" class="form-control" id="Amount" name="Amount" value="" placeholder="1982">
                                    </div>
                                    <div id="job_registration_form_extras" style="margin-top: 16px">
                                        <div id="job_employer_registration_button">
                                            <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">CGST</label>
                                        <input type="text" class="form-control" id="CGST" name="CGST" value="<?php echo ($aCGST); ?>" placeholder="9%">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">SGST</label>
                                        <input type="text" class="form-control" id="SGST" name="SGST" value="<?php echo ($bSGST); ?>" placeholder="9%">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Total Amount </label>
                                        <input type="text" class="form-control" id="Total_Amount" name="Total_Amount" value="<?php echo ($total_Amount); ?>" placeholder="19820">
                                    </div>
                                    <div class="restricted_keyword_error registration_form" style="display: none;"></div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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