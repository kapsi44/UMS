<?php
  

class connection {
	public $conn ="";
	
	function __construct(){
		
		$dbhost = '127.0.0.1';
  		$dbuser = 'root';
   		$dbpass = 'MYSECRET';
   		$dbname = 'Hangouts'; 
   		$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  		 	if(! $conn ) {
    		 	echo "connection failed ";
   			}
   			echo 'Connected successfully';
   			mysqli_close($conn);
	}
   
	function insert(){
		include_once '../controller/variables.php';
		$query_reg = "insert into registration_details(id,first_name,last_name,user_name,dob,gender,password,email,bld_grp)values('','$firstname','$lastname','$username','$dob','$gender','$password','$email','$bloodGrp')";
		$result1 = mysqli_query($conn, $query_reg);
		
		if($result1) {
			echo "\n Input fetched";
		}
		else {
			echo "\n fail";
		}
		}
	
	
}


   
   ?>