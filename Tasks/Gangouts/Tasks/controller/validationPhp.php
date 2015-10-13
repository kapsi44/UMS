<?php
include_once '../view/register.php';
$error = "";

	if(isset($_POST['submit'])){

	include_once 'variables.php'; 
	 // Initialize error as blank
	//const MIN=3; const MAX=20; 
	define("MIN", 3); 
	define("MAX", 20);
	
	# Validate Username #
// if its not alpha numeric, throw error



if (!ctype_alnum($username)) {
	$error .= '<p class="error">Username should be alpha numeric characters only.</p>';
}
// if username is not 3-20 characters long, throw error
if (strlen($username) < MIN OR strlen($username) > MAX) {
	$error .= '<p class="error">Username should be within 3-20 characters long.</p>';
}

# Validate First Name #
// if its not alpha numeric, throw error
if (!ctype_alpha(str_replace(array("'", "-"), "",$first_name))) {
	$error .= '<p class="error">First name should be alpha characters only.</p>';
}
// if first_name is not 3-20 characters long, throw error
if (strlen($first_name) < MIN OR strlen($first_name) > MAX) {
	$error .= '<p class="error">First name should be within 3-20 characters long.</p>';
}

# Validate Last Name #
// if its not alpha numeric, throw error
if (!ctype_alpha(str_replace(array("'", "-"), "", $last_name))) {
	$error .= '<p class="error">Last name should be alpha characters only.</p>';
}
// if first_name is not 3-20 characters long, throw error
if (strlen($last_name) < MIN OR strlen($last_name) > MAX) {
	$error .= '<p class="error">Last name should be within 3-20 characters long.</p>';
}

# Validate Password #
// if first_name is not 3-20 characters long, throw error
if (strlen($password) < MIN OR strlen($password) > MAX) {
	$error .= '<p class="error">Password should be within 3-20 characters long.</p>';
}

# Validate Confirm Password #
// if first_name is not 3-20 characters long, throw error
if ($confirm_password != $password) {
	$error .= '<p class="error">Confirm password mismatch.</p>';
}

# Validate Email #
// if email is invalid, throw error
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // you can also use regex to do same
	$error .= '<p class="error">Enter a valid email address.</p>';
}

# Validate Phone #
// if phone is invalid, throw error
if (!ctype_digit($phone) OR strlen($phone) != 10) {
	$error .= '<p class="error">Enter a valid phone number.</p>';
}

# Validate Gender #
// if gender is not selected or invalid, throw error
if ($gender != 'male' && $gender != 'female') {
	$error .= '<p class="error">Please select your gender.</p>';
}

# Validate Blood Group #
// if blood group is not selected, throw error
if ($blood_group == 0) {
	$error .= '<p class="error">Please select your blood group.</p>';
}

# Validate Date of Birth (DOB) #
// if day is not 1-31, throw error
if (intval($day)<1 OR intval($day)>31) {
	$error .= '<p class="error">Enter a valid day between 1-31.</p>';
}
// if month is not 1-12, throw error
if (intval($month)<1 OR intval($month)>12) {
	$error .= '<p class="error">Enter a valid month between 1-12.</p>';
}
// if age is below 18 , throw error
if ($age < 18) {
	$error .= '<p class="error">You should be at least 18 years old.</p>';
}


}
?>