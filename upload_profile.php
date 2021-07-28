<?php
session_start();
include './connect.php';

$id = $_SESSION['id'];
$info = pathinfo($_FILES['profile']['name']);
$ext = $info['extension'];
$newname = "profile-" . $id . "." . $ext;

$target = 'uploads/' . $newname;
move_uploaded_file($_FILES['profile']['tmp_name'], $target);
$q2 = "UPDATE `seeker_details` SET `profile_picture` = '$newname' WHERE `seeker_details`.`id` = $id;";
$conn->query($q2);
?>
<script>
    location.replace("./profile/index.php");
</script>