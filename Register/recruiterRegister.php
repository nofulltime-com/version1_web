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

    <title>Recruiter-Registeration </title>
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
                </nav>
            </div>
        </div>
    </header>
    <?php

    include 'dbcon.php';
    $username = $email = $phone = $password = "";
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email =    mysqli_real_escape_string($conn, $_POST['email']);
        $phone =    mysqli_real_escape_string($conn, $_POST['phone']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $token = bin2hex(random_bytes(15));

        $emailquery = "select * from recruiter where email='$email'";
        $query = mysqli_query($conn, $emailquery);
        $emailcount = mysqli_num_rows($query);

        $phonequery = "select * from recruiter where phone='$phone'";
        $query1 = mysqli_query($conn, $phonequery);
        $phonecount = mysqli_num_rows($query1);

        $userquery = "select * from recruiter where username='$username'";
        $query2 = mysqli_query($conn, $userquery);
        $usercount = mysqli_num_rows($query2);

        if ($usercount > 0) {
            header("Location: recruiterRegister.php?error=username already exists. Enter different username");
            exit();
        } else if ($emailcount > 0) {
            header("Location: recruiterRegister.php?error=email already exists. Enter different email");
            exit();
        } else if ($phonecount > 0) {
            header("Location: recruiterRegister.php?error=phone number already exists. Enter different phone number");
            exit();
        } else {
            $insertquery = "insert into recruiter(username, email, phone, password,token) values ('$username','$email','$phone','$pass','$token')";
            $iquery = mysqli_query($conn, $insertquery);
            $_SESSION['msg1'] = "You have been Successfully registered";

    ?>
            <script>
                location.replace("recruiterLogin.php");
            </script>
    <?php
        }
    }
    ?>



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
                                <form autocomplete="off" role="form" id="registration-form" onsubmit="return validation()" action="" method="POST" class="nofulltime-form">
                                    <?php if (isset($_GET['error'])) { ?>
                                        <p class="error"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Full Name</label>
                                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" placeholder="Alex Roy">
                                        <span id="usererror" class="text-danger font-weight-bold"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label">Official Email Id </label>
                                        <div data-toggle="popover" id="email_desktop">
                                            <input type="email" class="form-control email-field-employer-registration" id="email" name="email" value="<?php echo $email; ?>" placeholder="name@company_name.com">
                                            <span id="emailerror" class="text-danger font-weight-bold"></span>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="control-label">Phone Number(Enter with country code)</label>
                                        <input type="phone" class="form-control" id="phone" name="phone" placeholder="91-9784560213" value="<?php echo $phone; ?>">
                                        <span id="phoneerror" class="text-danger font-weight-bold"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="control-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Minimum 6 characters" value="<?php echo $password; ?>">

                                        <input type="checkbox" onclick="myFunction()"> Show Password
                                        <span id="passerror" class="text-danger font-weight-bold"></span>
                                        <script>
                                            function myFunction() {
                                                var x = document.getElementById("password");
                                                if (x.type === "password") {
                                                    x.type = "text";
                                                } else {
                                                    x.type = "password";
                                                }
                                            }
                                        </script>
                                    </div>
                                    <div class="restricted_keyword_error registration_form" style="display: none;"></div>
                                    <div id="job_registration_form_extras" style="margin-top: 16px">
                                        <div class="label_toc">
                                            <span style='color: #333333; line-height: 1.57; font-weight: 400'>
                                                By registering, you agree to our <a href="" target="_blank">Terms and Conditions</a>.
                                            </span>
                                        </div>


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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function validation() {
            var username = document.getElementById("username").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var password = document.getElementById("password").value;

            var usercheck = /^[A-Za-z. ]{3,30}$/;
            var passcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
            var emailcheck = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            var phonecheck = /^[0-9]{2}[-][0-9]{10}$/;

            if (usercheck.test(username)) {
                document.getElementById('usererror').innerHTML = " ";

            } else {
                document.getElementById('usererror').innerHTML = "** Username is incorrect";
                return false;
            }
            if (emailcheck.test(email)) {
                document.getElementById('emailerror').innerHTML = " ";

            } else {
                document.getElementById('emailerror').innerHTML = "** Email is incorrect";
                return false;
            }
            if (phonecheck.test(phone)) {
                document.getElementById('phoneerror').innerHTML = " ";

            } else {
                document.getElementById('phoneerror').innerHTML = "** Phone Number is incorrect";
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