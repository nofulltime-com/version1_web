<?php 
    session_start();
	 include_once "./connect.php";
    if(isset($_SESSION['recruiter_id'])){
       
        $outgoing_id = $_SESSION['recruiter_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $output = "";
		
        $sql = "SELECT * FROM chatbox LEFT JOIN users ON users.id = chatbox.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0){
            while($row = mysqli_fetch_assoc($query)){
	$added = $row['timestamp'];
	$strtotime=strtotime($added);
	$time = date('d-m-y h:i A', $strtotime);
		
	
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .= '
								
								<div class="chat outgoing">
                                <div class="details">
								
                                    <p>'. $row['message'] .'  </p>
				<h6 class="minutes" style="font-size:10px; text-align:right;">'.$time.'</h6>
                                </div>
                                </div>';
                }else{
                    $output .= '<div class="chat incoming">
                               
                                <div class="details">
                                    <p>'. $row['message'] .'</p>
				<h6 class="minutes" style="font-size:10px; align-items:left;">'.$time.'</h6>
                                </div>
                                </div>';
                }
            }
			
        }else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>