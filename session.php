<?php
														
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	include('config.php');	

	session_start();// Starting Session

	// Storing Session
	$user_check=$_SESSION['login_user'];

	// SQL Query To Fetch Complete Information Of User
	$all = "SELECT * FROM user WHERE user_email='$user_check'";
	$ses_sql = "SELECT user_name FROM user WHERE user_email='$user_check'";
	$query = mysqli_query($con, $ses_sql);
	$row = mysqli_fetch_assoc($query);
	$login_session =$row['user_name'];
	if(!isset($login_session))
	{
		mysqli_close($con); // Closing Connection
		header('Location: index.html'); // Redirecting To Home Page
	}
?>