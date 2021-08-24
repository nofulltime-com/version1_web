<?php 
include "dbcon.php";
require_once "gconfig2.php";

if (isset($_GET['code'])) {
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
  }
  if (isset($_SESSION['token'])) {
    $gClient->setAccessToken($_SESSION['token']);
  }
  if ($gClient->getAccessToken()) {
    $gpUserProfile = $google_oauthV2->userinfo->get();
    $google_id = $gpUserProfile['id'];
    $username = $gpUserProfile['given_name'];
    $email = $gpUserProfile['email'];
    $sql = "SELECT * FROM users WHERE g_id='".$gpUserProfile['id']."'";
      $result = $conn->query($sql);
      if ($result->num_rows == 1) {
      $conn->query("update users set username='".$username."', email='".$email."',  url='".$url."' where g_id='".$google_id."' ");
      } else {
        $conn->query("INSERT INTO users ( username, email, g_id) VALUES ( '".$username."', '".$email."', '".$google_id."')"); 

      }
      $retrieve_value = mysqli_fetch_assoc($result);

      $_SESSION['id'] = $retrieve_value['id'];
    
  }
  header('Location:../check.php');
?>