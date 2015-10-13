<?php
include_once '../view/register.php';

 
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
	


	
	?>
	
	