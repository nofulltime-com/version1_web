<?php
session_start();
include './connect.php';
?>
<?php
$id = $_SESSION['id'];
$query = "SELECT * FROM `seeker_details` WHERE id='$id'";
$res = $conn->query($query);
if ($res->num_rows > 0)
    header("Location: ./profile/index.php");
else
    header("Location: ./seeker_preferences.php");

exit();
