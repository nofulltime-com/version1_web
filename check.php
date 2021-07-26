<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
include './connect.php';
$id = $_SESSION['id'];
$query = "SELECT * FROM `seeker_details` WHERE id='$id'";
$res = $conn->query($query);
if ($res->num_rows > 0)
    header("Location: ./profile/index.php");
else
    header("Location: ./seeker_preferences.php");
?>

</html>