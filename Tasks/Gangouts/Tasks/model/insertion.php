<?php
//include_once '/var/www/html/Gangouts/Tasks/variables.php';

if (isset($_POST["submit"])) {
	$email       = $_POST['email'];
	$username    = trim($_POST['username']);
	$first_name   = trim($_POST['fn']);
	$last_name	 = trim($_POST['ln']);
	$mobile      = $_POST['mobile'];
	$gender      = $_POST['gender'];
	$day         = $_POST['day'];
	$month       = $_POST['month'];
	$year        = $_POST['year'];
	$dob         = $day.$month.$year;
	$age		 =	date("Y")-$year;
	$blood_group    = $_POST['bloodGroup'];
	$password    = $_POST['password'] ;
	$confirm_password= $_POST['confirmPassword'];
	//$interest    = $_POST['interest'];
	//$qualify     = $_POST['qualify'];


	$query_reg  = "insert into registration_details(id, first_name,last_name,user_name,gender,dob,password,email,bld_grp ) values('','$firstname','$lastname','$username','$year-$month-$day','$gender','$password','$email','$bloodGrp')";

	$result1 = mysqli_query($conn, $query_reg);
	//$result2 = mysqli_query($conn, $query_mob);
	//$result3 = mysqli_query($conn, $query_adr);
	//$result4 = mysqli_query($conn, $query_con);
	if($result1) {
		echo "\n Input fetched";
	}
	else {
		echo "\n fail";
	}
	}

?>