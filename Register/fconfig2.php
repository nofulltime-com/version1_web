<?php
session_start();
require_once __DIR__ . '/Facebook/autoload.php';
use Facebook\Facebook;


$redirectUrl   = 'https://www.nofulltime.com/nofulltime/Register/frecruiter-callback.php';



$facebook = new Facebook([
  'app_id'      => '291147642762676',
  'app_secret'     => '1cc4f044c63b539f968a6a2a8f0454fe',
  'default_graph_version'  => 'v2.10'
]);

$helper = $fb->getRedirectLoginHelper();
if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
}

	if(isset($_SESSION['facebook_access_token'])) {
		$accessToken = $_SESSION['facebook_access_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
?>