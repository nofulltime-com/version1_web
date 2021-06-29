<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['preference'] as $selected) {
        echo "<script>alert('$selected');</script>";
    }
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
        margin-top: 5%;
    }

    label {
        font-size: 20px;
        font-weight: 500;
    }

    small {
        font-weight: 400;
        font-size: medium;
    }

    .preferences {
        padding: 15px 30px 15px 40px;
        border: 1px solid #DDD;
        border-radius: 5px;
    }

    .additional {
        display: none;
        border: 1px solid rgb(221, 221, 221);
        padding: 3%;
        border-radius: 10px;
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
        <h1 class="text-center display-4">Preferences</h1>
    </div>


    <div class="container form-container mt-2">
        <fieldset style="border: 1px solid #DDD;border-radius:8px;padding:4%">
            <form class="row g-3" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="col-md-12">
                    <label for="name" class="form-label">What are you looking for?</label>
                    <div class="col-md-12">
                        <div class="form-check preferences">
                            <input class="form-check-input" type="checkbox" name="preference[]" id="parttime" value="parttime" <?php if (isset($preference) && $preference == "parttime") echo "checked"; ?>>
                            <label class="form-check-label" for="parttime">Part-Time Job</label>
                        </div>
                        <div class="form-check preferences mt-4">
                            <input class="form-check-input" type="checkbox" name="preference[]" id="course" value="course" <?php if (isset($preference) && $preference == "course") echo "checked"; ?>>
                            <label class="form-check-label" for="course">Course</label>
                        </div>
                        <div class="form-check preferences mt-4">
                            <input class="form-check-input" type="checkbox" name="preference[]" id="ngo" value="ngo" <?php if (isset($preference) && $preference == "ngo") echo "checked"; ?>>
                            <label class="form-check-label" for="ngo">Work for an NGO</label>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 additional" id='partime-details'>
                    <label for="name" class="form-label">Which of the following part-time job type are you looking for?</label>
                    <div class="col-md-6 mt-3">
                        <div class="form-check form-check-inline ml-4">
                            <input class="form-check-input" type="radio" name="work_place" id="wfh" value="wfh" <?php if (isset($work_place) && $work_place == "wfh") echo "checked"; ?> required>
                            <label class="form-check-label" for="wfh">Work From Home</label>
                        </div>
                        <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="work_place" id="in_o" value="in_office" <?php if (isset($work_place) && $work_place == "in_office") echo "checked"; ?>>
                            <label class="form-check-label" for="in_o">In-Office</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 mt-4">
                            <label for="field" class="form-label">Field:</label>
                            <input type="text" class="form-control mt-2" id="field" name="field" placeholder="e.g Software Development" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for=" position" class="form-label">Position:</label>
                            <input type="text" class="form-control mt-2" id=" position" name=" position" placeholder="e.g Full Stack Developer" required>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <label for="part_time_start">Enter the time interval when you will be available for part-time:</label>
                        <div class="col-6">
                            <small for="part_time_start">Start Time:</small>
                            <input type="time" class="form-control" id="part_time_start" name="part_time_start">
                        </div>
                        <div class="col-6">
                            <small for="part_time_end">End Time:</small>
                            <input type="time" class="form-control" id="part_time_end" name="part_time_end">
                        </div>
                    </div>
                </div>


                <div class="container additional mt-5" id='course-details' style="display:none;">
                    <label for="name" class="form-label">Where do you want to learn the course?</label>
                    <div class="col-md-6 mt-3">
                        <div class="form-check form-check-inline ml-4">
                            <input class="form-check-input" type="radio" name="learning_place" id="online" value="online" <?php if (isset($learning_place) && $learning_place == "online") echo "checked"; ?> required>
                            <label class="form-check-label" for="online">Online</label>
                        </div>
                        <div class="form-check form-check-inline ml-3">
                            <input class="form-check-input" type="radio" name="learning_place" id="in_o" value="coaching_center" <?php if (isset($learning_place) && $learning_place == "coaching_center") echo "checked"; ?>>
                            <label class="form-check-label" for="in_o">At Coaching center</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 mt-4">
                            <label for="field" class="form-label">Field:</label>
                            <input type="text" class="form-control mt-2" id="field" name="field" placeholder="e.g Web Development" required>
                        </div>
                        <div class="col-6 mt-4">
                            <label for=" position" class="form-label">Course Name:</label>
                            <input type="text" class="form-control mt-2" id=" position" name=" position" placeholder="e.g REACT JS" required>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <label for="part_time_start">Enter the time interval you want to use for the course:</label>
                        <div class="col-6">
                            <small for="part_time_start">Start Time:</small>
                            <input type="time" class="form-control" id="part_time_start" name="part_time_start">
                        </div>
                        <div class="col-6">
                            <small for="part_time_end">End Time:</small>
                            <input type="time" class="form-control" id="part_time_end" name="part_time_end">
                        </div>
                    </div>

                </div>
                <div class="container" id='ngo-details' style="display:none"></div>

                <div class="col-12 mt-5 text-center">
                    <button type="submit" name="personal" class="btn btn-info btn-lg">Save & Next</button>
                </div>
            </form>
        </fieldset>
    </div>
    <script>
        var v1 = document.getElementById('parttime');
        var v2 = document.getElementById('course');
        var v3 = document.getElementById('ngo');
        v1.addEventListener('click', parttime);
        v2.addEventListener('click', course);
        v3.addEventListener('click', ngo);

        function parttime() {
            document.getElementById('partime-details').style.display = v1.checked ? "block" : "none";
        }

        function course() {
            document.getElementById('course-details').style.display = v2.checked ? "block" : "none";
        }

        function ngo() {
            document.getElementById('ngo-details').style.display = v3.checked ? "block" : "none";
        }
    </script>

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