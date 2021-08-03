
<?php 

 include 'connect.php';

    $outgoing_id = $_SESSION['id'];
	
    $sql = "SELECT DISTINCT id,username FROM recruiter INNER JOIN chatbox ON recruiter.id=chatbox.r_id where u_id ='$outgoing_id'";
    $query = mysqli_query($conn, $sql);
    $output = "";
    if(mysqli_num_rows($query) == 0){
        $output .= "No users are available to chat";
    }elseif(mysqli_num_rows($query) > 0){
        include_once "data.php";
    }
    
?>