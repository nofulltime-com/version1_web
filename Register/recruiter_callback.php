<?php
session_start();
include "dbcon.php";
include_once 'gconfig.php';
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
                  $sql = "SELECT * FROM recruiter WHERE g_id='".$gpUserProfile['id']."'";
	                $result = $conn->query($sql);
	                if ($result->num_rows == 1) {
	                $conn->query("update recruiter set username='".$username."', email='".$email."',  url='".$url."' where g_id='".$google_id."' ");
	                } else {
		              $conn->query("INSERT INTO recruiter ( username, email, g_id) VALUES ( '".$username."', '".$email."', '".$google_id."')"); 
        
                  $retrieve_value = mysqli_fetch_assoc($result);

                  $_SESSION['id'] = $retrieve_value['id']; 
	                }
	                $q1="SELECT * FROM recruiter WHERE g_id='".$google_id."'";
	                $res1=$conn->query($q1);
	                if($res1->num_rows>0)
	                {
	                    while($row1=$res1->fetch_assoc())
	                    {
	                        $_SESSION['recruiter_id']=$row1['id'];
	                    }
	                }
                  
                }
                header('Location:../recruiters.php');
?>