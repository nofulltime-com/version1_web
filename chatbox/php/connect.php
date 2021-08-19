<?php
$username = "nofulltime_nofulltime";
$servername = "localhost";
$password = "Intens@1555!";
$conn = new mysqli($servername, $username, $password, "nofulltime_nofulltime");
if ($conn->connect_error)
    die("Connection Error");

echo "<script>console.log('Connected to DB');</script>";
