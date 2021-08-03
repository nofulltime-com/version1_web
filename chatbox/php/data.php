<?php
error_reporting(0);
 include 'connect.php';
$status="";
    while($row = mysqli_fetch_assoc($query)){
		$uid = $row['id'];
		$username =$row['username']; 
      $sql2 = "SELECT * FROM chatbox WHERE (incoming_msg_id = {$row['id']}
                OR outgoing_msg_id = {$row['id']}) AND (outgoing_msg_id = {$outgoing_id} 
                OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";

        $query2 = mysqli_query($conn, $sql2);
       
        (mysqli_num_rows($query2) > 0) ? $result = $row2['message'] : $result ="No message available";
        (strlen($result) > 28) ? $messsage =  substr($result, 0, 28) . '...' : $messsage = $result;
        if(isset($row2['outgoing_msg_id'])){
            ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        ($status == "Offline now") ? $offline = "offline" : $offline = "";
        ($outgoing_id == $row['id']) ? $hid_me = "hide" : $hid_me = "";
		$sql3 = "SELECT profile_picture FROM seeker_details where id = $uid";
   		 $query3 = mysqli_query($conn, $sql3);
		   $row3 = mysqli_fetch_assoc($query3);
		   
		   
       echo  "<a href='./chat.php?id= $uid'>
                    <div class='content'>

							<img src='php/img/professional-icon.jpg' >
	
				
                    <div class='details'>
                        <span>$username</span>
                        <p><?php. $you . $messsage .?></p>
                    </div>
                    </div>
                    <div class='status-dot <?php. $offline .?>'><i class='fas fa-circle'></i></div>
                </a>";
     }
	 
	 ?>