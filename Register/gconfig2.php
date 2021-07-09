<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	$clientId = '692165718357-29qm7e734ce5qfmhmkp4skca8nn18kq2.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'g52CpYnTuFGZvq_yahzUYtGX'; //Application client secret
	$redirectURL = 'http://localhost/version1_web-main/seeker_preferences.php'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('NoFullTime');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>