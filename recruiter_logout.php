<?php
session_start();
unset($_SESSION['recruiter_id']);
header("Location: ./Register/recruiterLogin.php");
exit();
