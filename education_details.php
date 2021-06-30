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
        margin-top: 12%;
    }

    label {
        font-size: 18px;
        font-weight: 450;
    }

    small {
        font-weight: 400;
        font-size: medium;
    }

    .btn-link {
        text-align: left;
        font-size: 20px
    }

    .btn-link:hover {
        text-decoration: none;
        transform: scale(1.05);
    }

    .modal-title {
        margin-left: 31%;
    }

    @media only screen and (max-width:768px) {
        .heading {
            margin-top: 25%;
        }

        .modal-title {
            margin-left: 0%;
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
                    <br>
                    <button type="button" class="btn btn-link mt-4" onclick='grad()' data-toggle="modal" data-target="#myModal-2">
                        + Add Graduation
                    </button>
                    <br>
                    <button type="button" class="btn btn-link mt-4" onclick='ss()' data-toggle="modal" data-target="#myModal-3">
                        + Add senior secondary (XII)
                    </button>
                    <br>
                    <button type="button" class="btn btn-link mt-4" onclick='diploma()' data-toggle="modal" data-target="#myModal-4">
                        + Add diploma
                    </button>
                    <br>
                    <button type="button" class="btn btn-link mt-4" onclick='ssc()' data-toggle="modal" data-target="#myModal-5">
                        + Add secondary (X)
                    </button>

                    <div class="modal fade" id="myModal-1"></div>

                    <div class="modal fade" id="myModal-2"></div>

                    <div class="modal fade" id="myModal-3"></div>

                    <div class="modal fade" id="myModal-4"></div>

                    <div class="modal fade" id="myModal-5"></div>
                </fieldset>
            </div>
        </div>
    </div>
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
                        <div class="col-8 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g Indian Institute of Technology Madras" name='pg_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-4 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>"><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 mt-4">
                            <label for="pg_degree" class="form-label">Degree:</label>
                            <input required type="text" class="form-control mt-2" id="pg_degree" name="pg_degree" placeholder="e.g MBA">
                        </div>
                        <div class="col-6 mt-4">
                            <label for="stream" class="form-label">Stream:</label>
                            <input required type="text" class="form-control mt-2" id="stream" name="pg_stream" placeholder="e.g Finance">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input required type="text" class="form-control mt-2" id="percentage" name="pg_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-success btn-lg' type='submit'>Submit</button>
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
                        <div class="col-8 mt-4">
                            <label for="college" class="form-label">College</label>
                            <input type="text" required placeholder="e.g Indian Institute of Technology Madras" name='pg_college' class=" form-control" id="college" required>

                        </div>
                        <div class="col-4 mt-4">
                            <label for="year" class="form-label">Year of graduation</label>
                            <select required class="form-control" name="year" id='year'>
                                <?php
                                for ($year = (int)date('Y') + 6; 1980 <= $year; $year--) : ?>
                                    <option value="<?= $year; ?>"><?= $year; ?></option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6 mt-4">
                            <label for="pg_degree" class="form-label">Degree:</label>
                            <input required type="text" class="form-control mt-2" id="pg_degree" name="pg_degree" placeholder="e.g MBA">
                        </div>
                        <div class="col-6 mt-4">
                            <label for="stream" class="form-label">Stream:</label>
                            <input required type="text" class="form-control mt-2" id="stream" name="pg_stream" placeholder="e.g Finance">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 mt-4">
                            <label for="percentage" class="form-label">Percentage</label>
                            <input required type="text" class="form-control mt-2" id="percentage" name="pg_percentage" placeholder="Enter your percentage">
                        </div>
                    </div>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button class='btn btn-success btn-lg' type='submit'>Submit</button>
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