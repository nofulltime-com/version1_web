<?php
session_start();
include './connect.php';
?>
<?php
$id = $_SESSION['id'];
$q = "SELECT * FROM `job_seeker_details` WHERE id='$id'";
$res = $conn->query($q);
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $summary = $row['summary'];
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Additional Details</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
    <link rel="stylesheet" href="./seeker_details.css">
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
    <header id="header" id="home" style="background-color: black;">
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
                        <li class="message-box"><a href="chatbox/users.php" style="font-size:20px;"><i class="fas fa-comment-alt"></i></a></li>

                        <li class="menu-has-children"><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                            <i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
                            <ul>
                                <li><a href="./profile/index.php">Profile</a></li>
                                <li><a href="./seeker_preferences.php">Edit</a></li>
                                <li><a href="./jobseekers/index.php">Latest Posts</a></li>
                                <li><a href="./logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>

    <div class="container heading">
        <h1 class="text-center display-4">Your are just one step away!!</h1>
        <h3 class='text-center'>Provide your resume and stand out from the crowd</h3>
    </div>

    <div class="container form-container mt-2 mb-5">
        <fieldset style="border: 1px solid #2e2e2e;border-radius:8px;padding:5%">
            <form autocomplete="off" action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group ">
                    <label for="summary">Summary</label>
                    <textarea class="form-control" id="summary" name='summary' rows="5" required placeholder='Briefly explain about yourself...'><?php echo $summary; ?></textarea>
                </div>
                <div class="form-group ">
                    <label for="resume">Upload your resume</label>
                    <input type="file" name="resume" class='form-control' style='border:none' id="resume" accept="application/pdf">
                </div>
                <div class="col-12 mt-4 text-center">
                    <a href="./education_details.php" class='btn btn-lg btn-danger mt-2'>Previous</a>
                    <input type="submit" value="Submit" class="btn btn-lg mt-2 ml-4 btn-outline-success " name="submit">
                </div>
            </form>
        </fieldset>
    </div>

    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-12">
                    <div class="single-footer-widget">
                        <h6>Short Links</h6>
                        <ul class="footer-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="category.php">Category</a></li>
                            <li><a href="recruiters.php">Recruiters</a></li>
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
                        <a title="Address "><i class="fa fa-map-marker "></i> No.32, Vinayagar Kovil Street, Karungalpalayam, Erode - 638003, Tamil Nadu, India</a>
                        <br>
                        <a href="mailto:support@nofulltime.com " title="Email "><i class="fa fa-envelope "></i> support@nofulltime.com</a>
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