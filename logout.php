<?php
session_start();
include './connect.php'
?>

<?php
unset($_SESSION['id']);
header("Location: ./Register/studentLogin.php");
exit();
