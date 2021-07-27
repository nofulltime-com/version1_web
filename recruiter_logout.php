<?php
session_start();
include './connect.php'
?>
<?php
unset($_SESSION['recruiter_id']);

header("Location: ./Register/recruiterLogin.php");
exit();
