<?php
echo "Success";
include_once '../controller/validateRegister.php';
include_once '../model/connect.php';
//include_once 'php/insertion.php';
 if(isset($_POST['submit'])) {
 	$r=new Registration();
 	$r -> validate();
 	$r ->addUser();
 
 
 }





?>

