<?php
session_start();
$id = $_SESSION['recruiter_id'];
$name = $_POST['name'];
$organization = $_POST['organization'];
$designation = $_POST['designation'];
$location = $_POST['location'];
$industry = $_POST['industry'];
$subscription_mode = 'blank';
$id = 1;

// Database Connection
$conn = new mysqli('localhost', 'nofulltime_nofulltime', 'Intens@1555!', 'nofulltime_nofulltime');

if ($conn->connect_error) {
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("INSERT into recruiter_details(id, name, organization, designation, location, industry, subscription_mode) values(?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("issssss", $id, $name, $organization, $designation, $location, $industry, $subscription_mode);
	$stmt->execute();
	echo "Details Registered Successfully...!";
	$stmt->close();
	$conn->close();
}
