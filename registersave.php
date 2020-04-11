<?php
session_start();
include_once("dbCon.php");
$conn =connect();

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
  	$password = md5($_POST['password']);
  	$company_name = $_POST['company_name'];
	$phone = $_POST['phone'];
	$sql="INSERT INTO user_login(name, email, password,company_name, phone) 
		  VALUES('$name', '$email', '$password', '$company_name', '$phone')";
	//echo $sql;exit;
	if($conn->query($sql)){	
		$_SESSION['amsg']='Added successfully';
		header('Location:login.');
	}
	else{
		$_SESSION['emsg']="Something Went wrong!! Try Again later";
		header('Location:register.php');
	}
}
