<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php

$username = "root";
$servername = "localhost";
$password = "3183";
$conn = new mysqli($servername, $username, $password, "nofulltime");
if ($conn->connect_error)
    die("Connection Error");

echo "<script>console.log('Connected to DB');</script>";
$search_value = $_POST["search"];
$sql = "SELECT  DISTINCT 	place_of_work from job_seeker_details WHERE place_of_work LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query failed");
if (mysqli_num_rows($result) > 0) {

    $output = "<ul class='query-list'>";
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<li class='query-tab'><a>" . $row['place_of_work'] . "<a/></li>";
    }

    $output .= "</ul>";
    echo $output;
} else {
    echo "<li>No record found</li>";
}


?>