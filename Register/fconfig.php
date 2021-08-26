<?php
session_start();
require_once __DIR__ . '/Facebook/autoload.php';
use Facebook\Facebook;


$redirectUrl   = 'https://www.nofulltime.com/nofulltime/Register/fuser-callback.php';

$facebook = new Facebook([
  'app_id'      => '521389102467286',
  'app_secret'     => '7e18b9ac48425d60ebb1094f7d954236',
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