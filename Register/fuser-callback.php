<?php


class OauthUser {
    private $host          = "localhost";
    private $username      = "nofulltime_nofulltime";
    private $password      = "Interns@1555!";
    private $database_name = "nofulltime_nofulltime";
    private $table         = 'users';
	private $db;
    
    function __construct(){
		$this->db = new mysqli($this->host, $this->username, $this->password, $this->database_name);
		if($this->db->connect_error){
			die("Failed to connect with MySQL database: " . $this->db->connect_error);
		}
    }
	
	function verifyUser($userInfo) {
		
		$qry_body = "
							`f_id`		 = '".$userInfo['id']."',
							`username`           = '".$userInfo['name']."', 
							`email`          = '".$userInfo['email']."'"; 

		
		$select_qry = "select * from `users` where `email`= '".$userInfo['email']."' and `f_id`= '".$userInfo['id']."'";
		$res = $this->db->query($select_qry);
		if($res->num_rows > 0) {
			
            $qry = "update ".$this->table." set ".$qry_body." WHERE `email`= '".$userInfo['email']."' AND `oauth_id` = '".$userInfo['id']."'";
		} else {
			
            $qry = "insert into ".$this->table." set ".$qry_body."";		
		}

		$this->db->query($qry);
		$_SESSION['user_id']      = $userInfo['id'];
		$_SESSION['username']    = $userInfo['name'];
		$_SESSION['email']   = $userInfo['email'];
		
		header('location:../check.php');
		exit();
	}
	
}
?>