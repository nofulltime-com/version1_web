<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Additional Details</title>
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
        <h1 class="text-center display-3">Your just one step away!!</h1>
        <h3 class='text-center'>Provide your resume and stand out from the crowd</h3>
    </div>

    <div class="container form-container mt-2">
        <fieldset style="border: 1px solid #2e2e2e;border-radius:8px;padding:5%">
            <form autocomplete="off" action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="form-group ">
                    <label for="summary">Summary</label>
                    <textarea class="form-control" id="summary" required name='summary' rows="5" placeholder='Briefly explain about yourself...'></textarea>
                </div>
                <div class="form-group ">
                    <label for="resume">Upload your resume</label>
                    <input type="file" name="fileToUpload" class='form-control' style='border:none' id="fileToUpload" accept="application/pdf">
                </div>
                <div class="col-12 mt-4 text-center">
                    <input type="submit" value="Submit" class="btn btn-lg mt-2 btn-success" name="submit">
                    <a href="./education_details.php" class='btn btn-lg btn-outline-danger ml-4 mt-2'>Previous</a>
                </div>
            </form>
        </fieldset>
    </div>

</body>

</html>