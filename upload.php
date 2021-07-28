<?php
session_start();
include './connect.php';

$id = $_SESSION['id'];

$summary = $_POST['summary'];
$query = "UPDATE `job_seeker_details` SET `summary` = '$summary' WHERE `job_seeker_details`.`id` = $id";
$conn->query($query);



$info = pathinfo($_FILES['resume']['name']);
$ext = $info['extension'];
$newname = "resume-" . $id . "." . $ext;

$target = 'uploads/' . $newname;
move_uploaded_file($_FILES['resume']['tmp_name'], $target);
$q2 = "UPDATE `job_seeker_details` SET `resume` = '$newname' WHERE `job_seeker_details`.`id` = $id;";
$conn->query($q2);
?>
<script>
    location.replace("./profile/index.php");
</script>