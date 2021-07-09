<?php

require_once 'fb-composer/vendor/autoload.php';

if (!session_id())
{
    session_start();
}

$facebook = new \Facebook\Facebook([
  'app_id'      => '521389102467286',
  'app_secret'     => '7e18b9ac48425d60ebb1094f7d954236',
  'default_graph_version'  => 'v2.10'
]);

?>