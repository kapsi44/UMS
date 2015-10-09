
<?php
echo "hello";
require_once("dbconnect.php");

if (@$_POST["submit"] <> "") {
   				$email       = $_POST['email'];
   				$name        = $_POST['first_name'].$_POST['last_name'];
   				$mobile      = $_POST['mobile'];
   				//$street      = $_POST['street'];
   				//$city        = $_POST['city'];
   				//$country     = $_POST['country'];
   				//$website     = $_POST['website'];
			   	//$nationality = $_POST['nationality'];
			   	$gender      = $_POST['gender'];
			    $day         = $_POST['day'];
			    $month       = $_POST['month'];
			    $year        = $_POST['year'];
			    $bloodGrp    = $_POST['bloodGroup'];
				$password    = $_POST['Password'] ;   
			    	
			
					$query_reg  = "insert into registration_details(id, name,dob, gender,password,email,bld_grp ) values('','$name','$year-$month-$day','$gender','$password','$email','$bloodGrp')";
				    $query_mob  = "insert into mobile(user_id,mobile_no)values('','$mobile')";
				    //$query_adr  = "insert into address(user_id,street,city)values('','$street','$city')";
				    //$query_con  = "insert into country(user_id,country)values('','$country')";
				    
				    $result1 = mysqli_query($conn, $query_reg);
				    $result2 = mysqli_query($conn, $query_mob);
				    //$result3 = mysqli_query($conn, $query_adr);
				    //$result4 = mysqli_query($conn, $query_con);
				    if($result1 && $result2) {
				    	echo "\n Input fetched";
				    }
				    	else {
				    		echo "\n fail";
				    	}

?>

