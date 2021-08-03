<?php
$username = "root";
$servername = "localhost";
$password = "";
$conn = new mysqli($servername, $username, $password, "nofulltime");
if ($conn->connect_error)
    die("Connection Error");

echo "<script>console.log('Connected to DB');</script>";
