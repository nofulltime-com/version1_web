
<?php 
error_reporting(0);

 include 'connect.php';
if(!isset($_SESSION['recruiter_id'])){
	header("locatin: ../index,php");
}
    $outgoing_id = $_SESSION['recruiter_id'];
	
    $sql = "SELECT DISTINCT id,username FROM users INNER JOIN chatbox ON users.id=chatbox.u_id where r_id='$outgoing_id'";
	$_SESSION['recruiter_id']."'";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        echo "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    
?>