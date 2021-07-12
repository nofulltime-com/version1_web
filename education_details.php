<?php
session_start();
include './connect.php';

$id = $_SESSION['id'];
$pg_flag = false;
$grad_flag = false;
$ss_flag = false;
$ssc_flag = false;
$diploma_flag = false;
$q1 = "SELECT * FROM `education_details` WHERE id='$id' AND category='pg' ORDER BY year LIMIT 1";
$r1 = $conn->query($q1);
if ($r1->num_rows > 0) {
    $pg_flag = true;
    while ($row = $r1->fetch_assoc()) {
        $pg1_college = $row['college'];
        $pg1_degree = $row['stream'];
        $pg1_graduation_status  = $row['graduation_status'];
        $pg1_percentage = $row['percentage'];
        $pg1_year = $row['year'];
        $pg_sno = $row['sno'];
    }
}


$q2 = "SELECT * FROM `education_details` WHERE id='$id' AND category='grad' ORDER BY year LIMIT 1";
$r2 = $conn->query($q2);
if ($r2->num_rows > 0) {
    $grad_flag = true;
    while ($row = $r2->fetch_assoc()) {
        $grad1_college = $row['college'];
        $grad1_degree = $row['stream'];
        $grad1_graduation_status  = $row['graduation_status'];
        $grad1_percentage = $row['percentage'];
        $grad1_year = $row['year'];
        $grad_sno = $row['sno'];
    }
}


$q3 = "SELECT * FROM `education_details` WHERE id='$id' AND category='ss' ORDER BY year LIMIT 1";
$r3 = $conn->query($q3);
if ($r3->num_rows > 0) {
    $ss_flag = true;
    while ($row = $r3->fetch_assoc()) {
        $ss1_college = $row['college'];
        $ss1_degree = $row['stream'];
        $ss1_education_status  = $row['graduation_status'];
        $ss1_percentage = $row['percentage'];
        $ss1_year = $row['year'];
        $ss_sno = $row['sno'];
    }
}


$q4 = "SELECT * FROM `education_details` WHERE id='$id' AND category='diploma' ORDER BY year LIMIT 1";
$r4 = $conn->query($q4);
if ($r4->num_rows > 0) {
    $diploma_flag = true;
    while ($row = $r4->fetch_assoc()) {
        $diploma1_college = $row['college'];
        $diploma1_degree = $row['stream'];
        $diploma1_education_status  = $row['graduation_status'];
        $diploma1_percentage = $row['percentage'];
        $diploma1_year = $row['year'];
        $diploma_sno = $row['sno'];
    }
}


$q5 = "SELECT * FROM `education_details` WHERE id='$id' AND category='ssc' ORDER BY year LIMIT 1";
$r5 = $conn->query($q5);
if ($r5->num_rows > 0) {
    $ssc_flag = true;
    while ($row = $r5->fetch_assoc()) {
        $ssc1_college = $row['college'];
        $ssc1_degree = $row['stream'];
        $ssc1_education_status  = $row['graduation_status'];
        $ssc1_percentage = $row['percentage'];
        $ssc1_year = $row['year'];
        $ssc_sno = $row['sno'];
    }
}


if (isset($_POST['pg_submit'])) {
    $pg_education_status = $_POST['pg_education_status'];
    $pg_college = $_POST['pg_college'];
    $pg_year = $_POST['pg_year'];
    $pg_degree = $_POST['pg_degree'];
    $category = 'pg';
    $pg_percentage = $_POST['pg_percentage'];
    $query1 = "INSERT INTO `education_details` (`sno`, `id`, `category`, `stream`, `graduation_status`, `college`, `year`, `percentage`) VALUES (NULL, '$id', '$category', '$pg_degree', '$pg_education_status', '$pg_college', '$pg_year', '$pg_percentage');";
    $conn->query($query1);
}

if (isset($_POST['pg_edit_btn'])) {
    $pg_education_status = $_POST['pg_education_status'];
    $pg_college = $_POST['pg_college'];
    $pg_year = $_POST['pg_year'];
    $pg_degree = $_POST['pg_degree'];
    $category = 'pg';
    $pg_percentage = $_POST['pg_percentage'];
    $q_edit = "UPDATE `education_details` SET `stream` = '$pg_degree',`graduation_status`='$pg_education_status' ,`college` = '$pg_college', `year` = '$pg_year', `percentage` = '$pg_percentage' WHERE `education_details`.`sno` =$pg_sno;";
    $conn->query($q_edit);
}

if (isset($_POST['grad_edit_btn'])) {
    $grad_education_status = $_POST['grad_education_status'];
    $grad_college = $_POST['grad_college'];
    $grad_year = $_POST['grad_year'];
    $grad_degree = $_POST['grad_degree'];
    $category = 'grad';
    $grad_percentage = $_POST['grad_percentage'];
    $q_edit = "UPDATE `education_details` SET `stream` = '$grad_degree',`graduation_status`='$grad_education_status' ,`college` = '$grad_college', `year` = '$grad_year', `percentage` = '$grad_percentage' WHERE `education_details`.`sno` =$grad_sno;";
    $conn->query($q_edit);
}

if (isset($_POST['grad_submit'])) {
    $grad_education_status = $_POST['grad_education_status'];
    $grad_college = $_POST['grad_college'];
    $grad_year = $_POST['grad_year'];
    $grad_degree = $_POST['grad_degree'];
    $category = 'grad';
    $grad_percentage = $_POST['grad_percentage'];
    $query1 = "INSERT INTO `education_details` (`sno`, `id`, `category`, `stream`, `graduation_status`, `college`, `year`, `percentage`) VALUES (NULL, '$id', '$category', '$grad_degree', '$grad_education_status', '$grad_college', '$grad_year', '$grad_percentage');";
    $conn->query($query1);
}

if (isset($_POST['ss_submit'])) {
    $ss_education_status = $_POST['ss_education_status'];
    $ss_college = $_POST['ss_college'];
    $ss_year = $_POST['ss_year'];
    $ss_degree = $_POST['ss_degree'];
    $category = 'ss';
    $ss_percentage = $_POST['ss_percentage'];
    $query1 = "INSERT INTO `education_details` (`sno`, `id`, `category`, `stream`, `graduation_status`, `college`, `year`, `percentage`) VALUES (NULL, '$id', '$category', '$ss_degree', '$ss_education_status', '$ss_college', '$ss_year', '$ss_percentage');";
    $conn->query($query1);
}

if (isset($_POST['ss_edit_btn'])) {
    $ss_education_status = $_POST['ss_education_status'];
    $ss_college = $_POST['ss_college'];
    $ss_year = $_POST['ss_year'];
    $ss_degree = $_POST['ss_degree'];
    $category = 'ss';
    $ss_percentage = $_POST['ss_percentage'];
    $q_edit = "UPDATE `education_details` SET `stream` = '$ss_degree',`graduation_status`='$ss_education_status' ,`college` = '$ss_college', `year` = '$ss_year', `percentage` = '$ss_percentage' WHERE `education_details`.`sno` =$ss_sno;";
    $conn->query($q_edit);
}



if (isset($_POST['diploma_edit_btn'])) {
    $diploma_education_status = $_POST['diploma_education_status'];
    $diploma_college = $_POST['diploma_college'];
    $diploma_year = $_POST['diploma_year'];
    $diploma_stream = $_POST['diploma_stream'];
    $category = 'diploma';
    $diploma_percentage = $_POST['diploma_percentage'];
    $q_edit = "UPDATE `education_details` SET `stream` = '$diploma_stream',`graduation_status`='$diploma_education_status' ,`college` = '$diploma_college', `year` = '$diploma_year', `percentage` = '$diploma_percentage' WHERE `education_details`.`sno` =$diploma_sno;";
    $conn->query($q_edit);
}


if (isset($_POST['ssc_edit_btn'])) {
    $ssc_education_status = $_POST['ssc_education_status'];
    $ssc_college = $_POST['ssc_college'];
    $ssc_year = $_POST['ssc_year'];
    $ssc_stream = $_POST['ssc_stream'];
    $category = 'ssc';
    $ssc_percentage = $_POST['ssc_percentage'];
    $q_edit = "UPDATE `education_details` SET `stream` = '$ssc_stream',`graduation_status`='$ssc_education_status' ,`college` = '$ssc_college', `year` = '$ssc_year', `percentage` = '$ssc_percentage' WHERE `education_details`.`sno` =$ssc_sno;";
    $conn->query($q_edit);
}


if (isset($_POST['diploma_submit'])) {
    $diploma_education_status = $_POST['diploma_education_status'];
    $diploma_college = $_POST['diploma_college'];
    $diploma_year = $_POST['diploma_year'];
    $diploma_stream = $_POST['diploma_stream'];
    $category = 'diploma';
    $diploma_percentage = $_POST['diploma_percentage'];
    $query1 = "INSERT INTO `education_details` (`sno`, `id`, `category`, `stream`, `graduation_status`, `college`, `year`, `percentage`) VALUES (NULL, '$id', '$category', '$diploma_stream', '$diploma_education_status', '$diploma_college', '$diploma_year', '$diploma_percentage');";
    $conn->query($query1);
}

if (isset($_POST['ssc_submit'])) {
    $ssc_education_status = $_POST['ssc_education_status'];
    $ssc_college = $_POST['ssc_college'];
    $ssc_year = $_POST['ssc_year'];
    $ssc_stream = $_POST['ssc_stream'];
    $category = 'ssc';
    $ssc_percentage = $_POST['ssc_percentage'];
    $query1 = "INSERT INTO `education_details` (`sno`, `id`, `category`, `stream`, `graduation_status`, `college`, `year`, `percentage`) VALUES (NULL, '$id', '$category', '$ssc_stream', '$ssc_education_status', '$ssc_college', '$ssc_year', '$ssc_percentage');";
    $conn->query($query1);
}
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Details</title>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
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
    h4 {
        color: grey;
    }

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
                    <a href="index.php" style="font-size:25px;color:white;font-weight: bold;">NO FULL TIME</a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="category.html">Category</a></li>
                        <li><a href="recruiters.html">recruiters</a></li>
                        <li><a href="blog-home.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>

                        <li class="menu-has-children"><a href=""><i class='fas fa-user-circle' style='font-size:36px;color:white'></i></a>
                            <i class='fas fa-user-circle mobile' style='font-size:36px;color:white'></i>
                            <ul>
                                <li><a href="./profile/index.php">Profile</a></li>
                                <li><a href="./seeker_preferences.php">Edit</a></li>
                                <li><a href="./logout.php">Logout</a></li>
                            </ul>
                        </li>

                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header>

    <div class="container heading">
        <h1 class="text-center display-4">Education</h1>
        <h5 class='text-center'>Add your education details</h5>
    </div>


    <div class="container form-container mt-4 mb-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <fieldset style="border: 1px solid #C0C0C0;border-radius:8px;padding:4%">
                    <button type="button" class="btn btn-link" onclick='pg()' data-toggle="modal" data-target="#myModal-1">
                        + Add post graduation
                    </button>
                    <div class='row'>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <?php
                            $q = "SELECT * FROM `education_details` WHERE id='$id' AND category='pg' ORDER BY year";
                            $result = $conn->query($q);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<h4 class='mt-3'> College-" . strtoupper($row['college']) . "</h4>";
                                    echo "<h4> Degree-" . strtoupper($row['stream']) . "</h4>";
                                }
                            }
                            ?>
                        </div>
                        <?php if ($pg_flag) { ?>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link" onclick='pg_edit()' data-toggle="modal" data-target="#myModal-1">
                                    <i class='far fa-edit' style='font-size:25px;color:grey'></i>
                                </button>
                            </div>
                        <?php } ?>

                    </div>
                    <button type="button" class="btn btn-link mt-3" onclick='grad()' data-toggle="modal" data-target="#myModal-2">
                        + Add Graduation
                    </button>
                    <div class='row'>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <?php
                            $q = "SELECT * FROM `education_details` WHERE id='$id' AND category='grad'";
                            $result = $conn->query($q);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<h4 class='mt-3'> College-" . strtoupper($row['college']) . "</h4>";
                                    echo "<h4> Degree-" . strtoupper($row['stream']) . "</h4>";
                                }
                            }
                            ?>
                        </div>
                        <?php if ($grad_flag) { ?>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link" onclick='grad_edit()' data-toggle="modal" data-target="#myModal-2">
                                    <i class='far fa-edit' style='font-size:25px;color:grey'></i>
                                </button>
                            </div>
                        <?php } ?>
                    </div>



                    <button type="button" class="btn btn-link mt-3" onclick='ss()' data-toggle="modal" data-target="#myModal-3">
                        + Add senior secondary
                    </button>
                    <div class='row'>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <?php
                            $q = "SELECT * FROM `education_details` WHERE id='$id' AND category='ss'";
                            $result = $conn->query($q);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<h4 class='mt-3'> College-" . strtoupper($row['college']) . "</h4>";
                                    echo "<h4> Stream-" . strtoupper($row['stream']) . "</h4>";
                                }
                            }
                            ?>
                        </div>
                        <?php if ($ss_flag) { ?>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link" onclick='ss_edit()' data-toggle="modal" data-target="#myModal-3">
                                    <i class='far fa-edit' style='font-size:25px;color:grey'></i>
                                </button>
                            </div>
                        <?php } ?>
                    </div>



                    <button type="button" class="btn btn-link mt-4" onclick='diploma()' data-toggle="modal" data-target="#myModal-4">
                        + Add diploma
                    </button>
                    <div class='row'>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <?php
                            $q = "SELECT * FROM `education_details` WHERE id='$id' AND category='diploma'";
                            $result = $conn->query($q);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<h4 class='mt-3'> College-" . strtoupper($row['college']) . "</h4>";
                                    echo "<h4> Stream-" . strtoupper($row['stream']) . "</h4>";
                                }
                            }
                            ?>
                        </div>
                        <?php if ($diploma_flag) { ?>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link" onclick='diploma_edit()' data-toggle="modal" data-target="#myModal-4">
                                    <i class='far fa-edit' style='font-size:25px;color:grey'></i>
                                </button>
                            </div>
                        <?php } ?>
                    </div>


                    <button type="button" class="btn btn-link mt-4" onclick='ssc()' data-toggle="modal" data-target="#myModal-5">
                        + Add secondary (X)
                    </button>
                    <div class='row'>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <?php
                            $q = "SELECT * FROM `education_details` WHERE id='$id' AND category='ssc'";
                            $result = $conn->query($q);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<h4 class='mt-3'> School-" . strtoupper($row['college']) . "</h4>";
                                    echo "<h4> Board-" . strtoupper($row['stream']) . "</h4>";
                                }
                            }
                            ?>
                        </div>
                        <?php if ($ssc_flag) { ?>
                            <div class="col-md-3">
                                <button type="button" class="btn btn-link" onclick='ssc_edit()' data-toggle="modal" data-target="#myModal-5">
                                    <i class='far fa-edit' style='font-size:25px;color:grey'></i>
                                </button>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-12 mt-4 text-center" id='save'>
                        <a href='./additional_details.php' class="btn btn-success btn-lg">Save & Next</a>
                    </div>
                    <div class="col-12 mt-4 text-center" id='save'>
                        <a href='./seeker_details.php' class="btn btn-outline-danger btn-lg">Previous</a>
                    </div>
                    <div class="modal fade" id="myModal-1"></div>

                    <div class="modal fade" id="myModal-2"></div>

                    <div class="modal fade" id="myModal-3"></div>

                    <div class="modal fade" id="myModal-4"></div>

                    <div class="modal fade" id="myModal-5"></div>
                </fieldset>
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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="category.html">Category</a></li>
                            <li><a href="recruiters.html">Recruiters</a></li>
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
                    <a href="#"><i class="fa fa-facebook pt-1"></i></a>
                    <a href="#"><i class="fa fa-instagram pt-1"></i></a>
                    <a href="#"><i class="fa fa-twitter pt-1"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function pg() {
            document.getElementById('myModal-1').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header text-center">
                    <h2 class="modal-title text-center">Post Graduation details</h2>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Post Graduation status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pg_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pg_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g Hindu College"  name='pg_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control"  name="pg_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>" ><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 mt-4">
                            <label for="pg_degree" class="form-label">Degree:</label>
                            <input required type="text" class="form-control mt-2" id="pg_degree" name="pg_degree" placeholder="e.g MBA">
                        </div>
                       
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" name="pg_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='pg_submit'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }

        function pg_edit() {
            document.getElementById('myModal-1').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header text-center">
                    <h2 class="modal-title text-center">Post Graduation details</h2>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Post Graduation status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($pg1_graduation_status) && $pg1_graduation_status == "pursuing") { ?>' checked '<?php } ?>' name="pg_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($pg1_graduation_status) && $pg1_graduation_status == "completed") { ?>' checked '<?php } ?>' name="pg_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g Hindu College" value='<?php echo $pg1_college ?>' name='pg_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" '<?php echo $pg1_year ?>' name="pg_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>"  <?php if ($year == $pg1_year) echo "selected"; ?>><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 mt-4">
                            <label for="pg_degree" class="form-label">Degree:</label>
                            <input required type="text" class="form-control mt-2" value='<?php echo $pg1_degree ?>' id="pg_degree" name="pg_degree" placeholder="e.g MBA">
                        </div>
                       
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" value='<?php echo $pg1_percentage ?>' name="pg_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='pg_edit_btn'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }

        function grad() {
            document.getElementById('myModal-2').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header text-center">
                    <h2 class="modal-title text-center">Graduation details</h2>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Graduation status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="grad_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="grad_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g Indian Institute of Technology Madras" name='grad_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="grad_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>"><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 mt-4">
                            <label for="grad_degree" class="form-label">Degree:</label>
                            <input required type="text" class="form-control mt-2" id="grad_degree" name="grad_degree" placeholder="e.g B.Sc(Hons)">
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" name="grad_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='grad_submit'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }

        function grad_edit() {
            document.getElementById('myModal-2').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header text-center">
                    <h2 class="modal-title text-center">Graduation details</h2>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Graduation status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($grad1_graduation_status) && $grad1_graduation_status == "pursuing") { ?>' checked '<?php } ?>' name="grad_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($grad1_graduation_status) && $grad1_graduation_status == "completed") { ?>' checked '<?php } ?>' name="grad_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" value='<?php echo $grad1_college ?>' required placeholder="e.g Indian Institute of Technology Madras" name='grad_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="grad_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>" <?php if ($year == $grad1_year) echo "selected"; ?>><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 mt-4">
                            <label for="grad_degree" class="form-label">Degree:</label>
                            <input required type="text" value='<?php echo $grad1_degree ?>' class="form-control mt-2" id="grad_degree" name="grad_degree" placeholder="e.g B.Sc(Hons)">
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" value='<?php echo $grad1_percentage ?>' name="grad_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='grad_edit_btn'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }


        function ss() {
            document.getElementById('myModal-3').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header ss text-center">
                    <h2 class="modal-title text-center" style='margin-left: 0%;'>Senior Secondary(XII) details</h2>
                    <button type="button" class="close" data-dismiss="modal">x</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Intermediate status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ss_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ss_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g Delhi Public School" name='ss_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="ss_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>"><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 mt-4">
                            <label for="ss_degree" class="form-label">Stream:</label>
                            <input required type="text" class="form-control mt-2" id="ss_degree" name="ss_degree" placeholder="e.g Science">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" name="ss_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='ss_submit'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }



        function ss_edit() {
            document.getElementById('myModal-3').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header text-center">
                    <h2 class="modal-title text-center" style='margin-left: 0%;'>Senior Secondary(XII) details</h2>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Graduation status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($ss1_education_status) && $ss1_education_status == "pursuing") { ?>' checked '<?php } ?>' name="ss_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($ss1_education_status) && $ss1_education_status == "completed") { ?>' checked '<?php } ?>' name="ss_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" value='<?php echo $ss1_college ?>' required placeholder="e.g Delhi Public School" name='ss_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="ss_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>" <?php if ($year == $ss1_year) echo "selected"; ?>><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 mt-4">
                            <label for="ss_degree" class="form-label">Stream:</label>
                            <input required type="text" value='<?php echo $ss1_degree ?>' class="form-control mt-2" id="ss_degree" name="ss_degree" placeholder="e.g Science">
                        </div>
                        
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" value='<?php echo $ss1_percentage ?>' name="ss_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='ss_edit_btn'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }



        function diploma_edit() {
            document.getElementById('myModal-4').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header ss text-center">
                    <h2 class="modal-title text-center">Diploma details</h2>
                    <button type="button" class="close" data-dismiss="modal">x</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Diploma status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($diploma1_education_status) && $diploma1_education_status == "pursuing") { ?>' checked '<?php } ?>' name="diploma_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($diploma1_education_status) && $diploma1_education_status == "completed") { ?>' checked '<?php } ?>' name="diploma_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g IGNOU" value='<?php echo $diploma1_college ?>' name='diploma_college' class=" form-control" id="college" required>
                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="diploma_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>" <?php if ($year == $diploma1_year) echo "selected"; ?>><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 mt-4">
                            <label for="stream" class="form-label">Stream:</label>
                            <input required type="text" class="form-control mt-2" value='<?php echo $diploma1_degree ?>' id="stream" name="diploma_stream" placeholder="e.g Creative Writing">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" value='<?php echo $diploma1_percentage ?>' id="percentage" name="diploma_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='diploma_edit_btn'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }

        function ssc_edit() {
            document.getElementById('myModal-5').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header ss text-center">
                    <h2 class="modal-title text-center">Secondary (X) details</h2>
                    <button type="button" class="close" data-dismiss="modal">x</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Matriculation status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" '<?php if (isset($ssc1_education_status) && $ssc1_education_status == "pursuing") { ?>' checked '<?php } ?>' name="ssc_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"'<?php if (isset($ssc1_education_status) && $ssc1_education_status == "completed") { ?>' checked '<?php } ?>' name="ssc_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">School</label>
                            <input type="text" value='<?php echo $ssc1_college ?>' required placeholder="e.g St Ann's School" name='ssc_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="ssc_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>" <?php if ($year == $ssc1_year) echo "selected"; ?>><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 mt-4">
                            <label for="stream" class="form-label">Board:</label>
                            <input required type="text" value='<?php echo $ssc1_degree ?>' class="form-control mt-2" id="stream" name="ssc_stream" placeholder="e.g I.C.S.E">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" value='<?php echo $ssc1_percentage ?>' name="ssc_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='ssc_edit_btn'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }

        function diploma() {
            document.getElementById('myModal-4').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header ss text-center">
                    <h2 class="modal-title text-center">Diploma details</h2>
                    <button type="button" class="close" data-dismiss="modal">x</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Diploma status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="diploma_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="diploma_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g IGNOU" name='diploma_college' class=" form-control" id="college" required>
                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="diploma_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>"><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 mt-4">
                            <label for="stream" class="form-label">Stream:</label>
                            <input required type="text" class="form-control mt-2" id="stream" name="diploma_stream" placeholder="e.g Creative Writing">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" name="diploma_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='diploma_submit'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
        }



        function ssc() {
            document.getElementById('myModal-5').innerHTML = `<div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <form action="" method='POST'>
                <div class="modal-header ss text-center">
                    <h2 class="modal-title text-center">Secondary (X) details</h2>
                    <button type="button" class="close" data-dismiss="modal">x</button>
                </div>

                <div class="modal-body p-4">
                    <label for="name" class="form-label">Matriculation status</label>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ssc_education_status" id="pursuing" value="pursuing" required>
                            <label class="form-check-label" for="pursuing">Pursuing
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ssc_education_status" id="completed" value="completed">
                            <label class="form-check-label" for="completed">Completed</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-7 mt-4">
                            <label for="college" class="form-label">School</label>
                            <input type="text" required placeholder="e.g St Ann's School" name='ssc_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-md-5 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="ssc_year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>"><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 mt-4">
                            <label for="stream" class="form-label">Board:</label>
                            <input required type="text" class="form-control mt-2" id="stream" name="ssc_stream" placeholder="e.g I.C.S.E">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input type="text" class="form-control mt-2" id="percentage" name="ssc_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-primary btn-lg' type='submit' name='ssc_submit'>Save</button>
                </div>
            </form>
        </div>
    </div>`;
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