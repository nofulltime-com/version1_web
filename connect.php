<?php
$username = "root";
$servername = "localhost";
$password = "Tisha@28";
$conn = new mysqli($servername, $username, $password, "nofulltime");
if ($conn->connect_error)
    die("Connection Error");

echo "<script>console.log('Connected to DB');</script>";

//job lister file