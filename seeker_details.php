<?php
session_start();
include './connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $status = $_POST['status'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];

    echo "<script>alert('$name,$age,$gender,$status,$city,$state,$country,$pincode');</script>";
    header("Location: ./seeker_preferences.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
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
</head>
<style>
    * {
        color: #2e2e2e;
    }

    .heading {
        margin-top: 7%;
    }

    label {
        font-size: 18px;
        font-weight: 500;
    }

    small {
        font-weight: 400;
        font-size: medium;
    }

    @media only screen and (max-width:768px) {
        .heading {
            margin-top: 25%;
        }
    }
</style>

<body>
    <header id="header" id="home" style="background-color: black;">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li><a href="price.html">Price</a></li>
                        <li><a href="blog-home.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li class="menu-has-children"><a href="">Pages</a>
                            <ul>
                                <li><a href="elements.html">elements</a></li>
                                <li><a href="search.html">search</a></li>
                                <li><a href="single.html">single</a></li>
                            </ul>
                        </li>
                        <li><a class="ticker-btn" href="#">Signup</a></li>
                        <li><a class="ticker-btn" href="#">Login</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>

    <div class="container heading">
        <h1 class="text-center display-4">Personal Details</h1>
    </div>

    <div class="container form-container mt-2">
        <fieldset style="border: 1px solid #2e2e2e;border-radius:8px;padding:5%">
            <form class="row g-3" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="col-md-12">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" placeholder="Enter your full name" name='name' value="<?php echo $name; ?>" class=" form-control" id="name" required>
                </div>
                <div class="col-md-4 mt-4">
                    <label for="age">Age</label>
                    <input type="number" name='age' class="form-control" value="<?php echo $age; ?>" id="age" required placeholder="Enter your age">
                </div>
                <div class="col-md-4" style="margin-top: 6%;">
                    <label class="form-label"><span>Gender:</span></label>
                    <div class="form-check form-check-inline ml-4">
                        <input class="form-check-input" type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> id="male" value="male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline ml-3">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <label for="name" class="form-label">Status</label>
                    <select required class="form-control" name="status">
                        <option value="">---Martial Status---</option>
                        <option value="single" <?php $status == 'single' ? ' selected="selected"' : ''; ?>>Single</option>
                        <option value="married" <?php $status == 'married' ? ' selected="selected"' : ''; ?>>Married</option>
                        <option value="single_woman" <?php $status == 'single_woman' ? ' selected="selected"' : ''; ?>>Single Woman</option>
                    </select>
                </div>
                <div class="col-4 mt-4">
                    <label for="city" class="form-label">City/Town</label>
                    <input type="text" class="form-control mt-2" id="city" name="city" placeholder="e.g Chennai" required>
                </div>
                <div class="col-4 mt-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control mt-2" id="State" name="state" placeholder="e.g Tamil Nadu" required>
                </div>
                <div class="col-4 mt-4">
                    <label for="country" class="form-label">Country</label>
                    <input type="text" class="form-control mt-2" name="country" id="country" placeholder="e.g India" required>
                </div>

                <div class="col-md-12 mt-4">
                    <label for="pincode" class="form-label">PIN code</label>
                    <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter your PIN code" required>
                </div>

                <div class="col-12 mt-5 text-center">
                    <button type="submit" name="personal" class="btn btn-info btn-lg">Save & Next</button>
                </div>
            </form>
        </fieldset>
    </div>

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