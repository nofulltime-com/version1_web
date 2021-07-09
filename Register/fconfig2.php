<?php

require_once 'fb-composer/vendor/autoload.php';

if (!session_id())
{
    session_start();
}

$facebook = new \Facebook\Facebook([
  'app_id'      => '291147642762676',
  'app_secret'     => '1cc4f044c63b539f968a6a2a8f0454fe',
  'default_graph_version'  => 'v2.10'
]);

?>