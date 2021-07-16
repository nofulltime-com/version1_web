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

  <title>Reset Password </title>
</head>

<body>

<?php
  $password="";
  include 'dbcon.php';
  if (isset($_POST['submit'])) {
    if(isset($_GET['token'])){
        $token = $_GET['token'];

        $password = $_POST['password'];

        $pass = password_hash($password, PASSWORD_BCRYPT);

        $updatequery =" update recruiter set password='$pass' where token='$token'";
         $iquery = mysqli_query($con, $updatequery);

         if($iquery){
            $_SESSION['msg1'] = "Your password has been updated";
            header('location:recruiterLogin.php');

         }else{
          $_SESSION['passmsg'] ="Your password not updated. You can now login";
         }

    }else{
      echo "No token found";
    }
  }      

?>        
    
<div class="container" style="padding-top:120px; padding-bottom:70px;">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex"></div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Recover Your Password
          </h4>
          <h4 class="title text-center mt-4">
            Please fill password correctly without any error.
          </h4>
          <p><?php
              if(isset($_SESSION['passmsg'])){
                echo $_SESSION['passmsg'];
              }else{
                echo $_SESSION['passmsg'] = "";
              }
           ?></p>
          <form autocomplete="off" class="form-box px-3" action="" onsubmit="return validation()" method="POST">
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" id= "password" name="password" placeholder="New Password" value="<?php echo $password; ?>">
              <input type="checkbox" onclick="myFunction()"> Show Password
              <span id="passerror" class="text-danger font-weight-bold"></span>
            </div>
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

            <div class="mb-3">
              <button type="submit" name="submit" class="btn btn-block text-uppercase">
                Update Password
              </button>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <script>
        function validation() {
          var password = document.getElementById("password").value;
          var passcheck = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
          if (passcheck.test(password)) {
                document.getElementById('passerror').innerHTML = " ";

            } else {
                document.getElementById('passerror').innerHTML = "** Password is incorrect. Please enter atleast one uppercase, one lowercase and minimum 6 characters";
                return false;
            }
        }
  </script>

</body>

</html>