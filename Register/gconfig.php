<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '145101863270-vn8ljjuag88re4c8hddhkstosurn7tk4.apps.googleusercontent.com'; //Application client ID
	$clientSecret = '0HcXqRaj0632DF5yYBDmS5WB'; //Application client secret
	$redirectURL = 'http://localhost/version1_web-main/recruiters.html'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('NoFullTime');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>