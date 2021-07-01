<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prefernces = '';
    foreach ($_POST['preference'] as $selected) {
        // echo "<script>alert('$selected');</script>";

        $prefernces = $prefernces  . "," . $selected;
    }
    $prefernces = substr($prefernces, 1);
    if (strpos($prefernces, 'parttime') !== false or strpos($prefernces, 'ngo') !== false) {
        $cookie_name = 'flag';
        setcookie($cookie_name, 1, time() + (86400 * 90), "/");
        echo "<script>console.log('$_COOKIE[$cookie_name]');</script>";
    } else {
        $cookie_name = 'flag';
        setcookie($cookie_name, 0, time() + (86400 * 90), "/");
        echo "<script>console.log('$_COOKIE[$cookie_name]');</script>";
    }
    if (isset($_POST['work_place'])) {
        $job_work_place = $_POST['work_place'];
    }
    if (isset($_POST['field'])) {
        $job_field = $_POST['field'];
    }
    if (isset($_POST['position'])) {
        $job_position = $_POST['position'];
    }

    if (isset($_POST['learning_place'])) {
        $course_place = $_POST['learning_place'];
    }

    if (isset($_POST['course_field'])) {
        $course_field = $_POST['course_field'];
    }

    if (isset($_POST['course_name'])) {
        $course_name = $_POST['course_name'];
    }
    if (isset($_POST['ngo-field'])) {
        $ngo_field = $_POST['ngo-field'];
    }
    if (isset($_POST['part_time_start'])) {
        $part_time_start = $_POST['part_time_start'];
    }
    if (isset($_POST['part_time_end'])) {
        $part_time_end = $_POST['part_time_end'];
    }
    if (isset($_POST['course_time_start'])) {
        $course_time_start = $_POST['course_time_start'];
    }
    if (isset($_POST['course_time_end'])) {
        $course_time_end = $_POST['course_time_end'];
    }
    if (isset($_POST['ngo_time_start'])) {
        $ngo_time_start = $_POST['ngo_time_start'];
    }
    if (isset($_POST['ngo_time_end'])) {
        $ngo_time_end = $_POST['ngo_time_end'];
    }
    // echo "<script>console.log('$job_work_place,$job_field,$job_position,$part_time_start,$part_time_end')</script>";
    // // echo "<script>console.log('$course_place,$course_field,$course_name,$course_time_start,$course_time_end')</script>";
    // // echo "<script>console.log('$ngo_field,$ngo_time_start,$ngo_time_end')</script>";
    header("Location: ./seeker_details.php");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferences</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="./seeker_details.css">

</head>

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


    <div class="container form-container mt-2 mb-5">
        <fieldset style="border: 1px solid #C0C0C0;border-radius:8px;padding:4%">
            <form class="row g-3" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="col-md-12 options">
                    <label for="name" class="form-label">What are you looking for?</label>
                    <div class="col-md-12 mt-4">
                        <div class="form-check preferences">
                            <input class="form-check-input" type="checkbox" name="preference[]" <?php if (strpos($prefernces, "parttime") !== false) echo 'checked';
                                                                                                else echo ""; ?> id="parttime" value="parttime">
                            <label class="form-check-label" for="parttime">Part-Time Job</label>
                        </div>
                        <div class="form-check preferences mt-4">
                            <input class="form-check-input" type="checkbox" name="preference[]" id="course" value="course" <?php if (strpos($prefernces, "course") !== false) echo 'checked';
                                                                                                                            else echo ""; ?>>
                            <label class="form-check-label" for="course">Learn a Course</label>
                        </div>
                        <div class="form-check preferences mt-4">
                            <input class="form-check-input" type="checkbox" name="preference[]" id="ngo" value="ngo" <?php if (strpos($prefernces, "ngo") !== false) echo 'checked';
                                                                                                                        else echo ""; ?>>
                            <label class="form-check-label" for="ngo">Work for a NGO</label>
                        </div>
                    </div>
                </div>

                <div class="container mt-5 additional" id='partime-details'>

                </div>


                <div class="container additional mt-5" id='course-details' style="display:none;">
                </div>


                <div class="container additional mt-5" id='ngo-details' style="display:none">
                </div>
                <script>
                    var inputs = document.querySelectorAll('[name="option[]"]')
                    var radioForCheckboxes = document.getElementById('radio-for-checkboxes')

                    function checkCheckboxes() {
                        var isAtLeastOneServiceSelected = false;
                        for (var i = inputs.length - 1; i >= 0; --i) {
                            if (inputs[i].checked) isAtLeastOneCheckboxSelected = true;
                        }
                        radioForCheckboxes.checked = isAtLeastOneCheckboxSelected
                    }
                    for (var i = inputs.length - 1; i >= 0; --i) {
                        inputs[i].addEventListener('change', checkCheckboxes)
                    }
                </script>
                <div class="col-12 mt-2 text-center" id='save'>
                    <button type="submit" name="preferences" class="btn btn-info btn-lg">Save & Next</button>
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
            document.getElementById('partime-details').innerHTML = v1.checked ? `<label for="name" class="form-label">Which of the following part-time job type are you looking for?</label>
                    <div class="col-md-6 mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="work_place" id="wfh" value="wfh" required>
                            <label class="form-check-label" for="wfh">Work From Home</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="work_place" id="in_o" value="in_office">
                            <label class="form-check-label" for="in_o">In-Office</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-4">
                            <label for="field" class="form-label">Field:</label>
                            <input type="text" class="form-control mt-2" id="field" name="field" placeholder="e.g Software Development" required>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for=" position" class="form-label">Position:</label>
                            <input type="text" class="form-control mt-2" id="position" name="position" placeholder="e.g Full Stack Developer" required>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <label for="part_time_start">Enter the time interval when you will be available for part-time:</label>
                        <div class="col-md-6">
                            <small for="part_time_start">Start Time:</small>
                            <input type="time" class="form-control" id="part_time_start" name="part_time_start" required>
                        </div>
                        <div class="col-md-6">
                            <small for="part_time_end">End Time:</small>
                            <input type="time" class="form-control" id="part_time_end" name="part_time_end" required>
                        </div>
                    </div>` : "";
            document.getElementById('partime-details').style.display = v1.checked ? "block" : "none";


        }

        function course() {
            document.getElementById('course-details').innerHTML = v2.checked ? `<label for="name" class="form-label">Where do you want to learn the course?</label>
                    <div class="col-md-6 mt-3">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="learning_place" id="online" value="online" required>
                            <label class="form-check-label" for="online">Online</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="learning_place" id="coaching_center" value="coaching_center">
                            <label class="form-check-label" for="coaching_center">At Coaching center</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6 mt-4">
                            <label for="course_field" class="form-label">Field:</label>
                            <input type="text" class="form-control mt-2" id="course_field" name="course_field" placeholder="e.g Web Development" required>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for=" position" class="form-label">Course Name:</label>
                            <input type="text" class="form-control mt-2" id="course" name="course_name" placeholder="e.g REACT JS" required>
                        </div>
                    </div>


                    <div class="row mt-5">
                        <label for="course_time_start">Enter the time interval you want to use for the course:</label>
                        <div class="col-md-6">
                            <small for="course_time_start">Start Time:</small>
                            <input type="time" class="form-control" id="course_time_start" name="course_time_start" required>
                        </div>
                        <div class="col-md-6">
                            <small for="course_time_end">End Time:</small>
                            <input type="time" class="form-control" id="course_time_end" name="course_time_end" required>
                        </div>
                    </div>
` : "";
            document.getElementById('course-details').style.display = v2.checked ? "block" : "none";
        }

        function ngo() {
            document.getElementById('ngo-details').style.display = v3.checked ? "block" : "none";

            document.getElementById('ngo-details').innerHTML = v3.checked ? ` <label for="ngo-field" class="form-label">Under which sector you want to work for?</label>
                    <div class="col-12 mt-2">
                        <small for="ngo-field" class="form-label">Sector:</small>
                        <input type="text" class="form-control mt-2" id="ngo-field" name="ngo-field" placeholder="e.g Women's Development & Empowerment" required>
                    </div>

                    <div class="row mt-5">
                        <label for="part_time_start">Enter the time interval you can constribute for the NGO:</label>
                        <div class="col-md-6">
                            <small for="part_time_start">Start Time:</small>
                            <input type="time" class="form-control" id="ngo_time_start" name="ngo_time_start" required>
                        </div>
                        <div class="col-md-6">
                            <small for="part_time_end">End Time:</small>
                            <input type="time" class="form-control" id="ngo_time_end" name="ngo_time_end" required>
                        </div>
                    </div>` : "";


        }
    </script>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
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