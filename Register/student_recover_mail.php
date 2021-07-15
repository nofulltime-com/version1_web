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

    $emailquery = "select * from users where email='$email'";
    $query = mysqli_query($con, $emailquery);

    $email_count = mysqli_num_rows($query);

    if ($email_count) {

        $userdata = mysqli_fetch_array($query);

        $username = $userdata['username'];
        $token = $userdata['token'];

        $subject = "Password Reset";
        $body = "Hi, $username. Click on the below link to reset your password
        http://localhost/version1_web/Register/student_reset_password.php?token=$token";
        $sender_email = "From: kevanmehta2511@gmail.com";

        if(mail($email,$subject,$body,$sender_email)){
            $_SESSION['msg'] = "check your mail to reset your password $email";
            header('location:studentLogin.php');
        }else{
            echo "email sending failed";
        }

    }else{
        echo "NO email found";
    }
}      

?>        
    
<div class="container" style="padding-top:120px; padding-bottom:70px;">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Recover Your Account
          </h4>
          <h4 class="title text-center mt-4">
            Please fill email correctly.
          </h4>
          <form autocomplete="off" class="form-box px-3" action="" onsubmit="return validation()"  method="POST">
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

  <script>
    function validation(){
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