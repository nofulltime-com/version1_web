<?php
include './connect.php';
$id = 8;

$summary = $_POST['summary'];
$query = "UPDATE `job_seeker_details` SET `summary` = '$summary' WHERE `job_seeker_details`.`id` = $id";
if ($conn->query($query) == TRUE) {
    echo "<script>console.log('$summary');</script>";
}

// $target_dir = "upload/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// $file_tmp = $_FILES["fileToUpload"]["tmp_name"];
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 10000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//     // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($file_tmp, $target_file)) {
//         echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
header("Location: ./profile/index.php");
