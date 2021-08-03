<?php 
    session_start();
 include './connect.php';
	
	 $u_id = $_SESSION['recruiter_id'];
	 
    if(isset($_SESSION['recruiter_id'])){
        $outgoing_id = $_SESSION['recruiter_id'];
        
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
		
        if(!empty($message)){
            $sql = mysqli_query($conn, "INSERT INTO chatbox (u_id, r_id, incoming_msg_id, outgoing_msg_id, message)
                                        VALUES ('$incoming_id', '$u_id', '$incoming_id', '$outgoing_id', '$message')");
        }
    }else{
        header("location: ../login.php");
    }


    
?>