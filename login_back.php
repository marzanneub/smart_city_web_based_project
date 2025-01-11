<?php
require('connect.php');

	$id = $_POST['user_id'];
	$pw = $_POST['password'];
	
	
	$sql = "SELECT * FROM admin WHERE admin_id='$id' AND password='$pw' ";
	$sql_query = mysqli_query($con, $sql);
	$found = mysqli_num_rows($sql_query);
		
	if($found)
	{
		$sql = "UPDATE admin SET login='1' WHERE admin_id='$id'";
		$sql_query = mysqli_query($con, $sql);
		
		header("location:admin_landing.php?admin_id="  . urlencode($id));
		exit();
	}
	
	$message="Incorrect user id or password";
	header("Location: login.php?message=" . urlencode($message));
	exit();
	
?>