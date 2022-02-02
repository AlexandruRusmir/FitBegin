<?php 
include_once 'create.php';

include 'config.php'; 

session_start();

error_reporting(0);


	$firstname = $_POST['firstname'];
	if(!$firstname)
		echo "<script>alert('Please introduce your first name.')</script>";
	$lastname = $_POST['lastname'];
	if(!$lastname)
		echo "<script>alert('Please introduce your last name.')</script>";
	$email = $_POST['email'];
	if(!$email)
		echo "<script>alert('Please introduce your email.')</script>";
	$phone = $_POST['phone'];
	if(!$phone)
		echo "<script>alert('Please introduce your email.')</script>";



	$sql = "INSERT INTO enrollments (firstname, lastname, email, phone)
		VALUES ('$firstname', '$lastname', '$email', '$phone')";
			
	$result = mysqli_query($conn, $sql);
			
	if ($result) 
	{
		echo "<script>alert('Enrollment sent!')</script>";
				
		$username = "";
		$email = "";
		$email = "";
		$phone = "";
	} 
	else 
		echo "<script>alert('Error sending enrollment!')</script>";
	
	header('location:index.html');
?>