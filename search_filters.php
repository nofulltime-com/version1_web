
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php

$username = "root";
$servername = "localhost";
$password = "";
$conn = new mysqli($servername, $username, $password, "nofulltime");
if ($conn->connect_error)
    die("Connection Error");

echo "<script>console.log('Connected to DB');</script>";
$search_value =$_POST["search"];
$sql="SELECT  DISTINCT position from job_seeker_details WHERE position LIKE '%{$search_value}%'";
$result=mysqli_query($conn,$sql)or die("SQL Query failed");
$output="<ul class='query-list'>";
if(mysqli_num_rows($result)>0)
{   
    
   
    while($row=mysqli_fetch_assoc($result)){
        $output.="<li class='query-tab'>".$row['position']."</li>";
        
    }
  
  
}
else{
    echo"<li>No record found</li>";
}
$output.="</ul>";
echo $output;

?>
