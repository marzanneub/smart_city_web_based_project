<?php
require('admin_check.php');

	$location_id = $_POST['location_id'];
	$name = $_POST['name'];
	
	$sql = "SELECT * FROM locations WHERE location_id='$location_id'";
	$sql_query = mysqli_query($con, $sql);
	$found = mysqli_num_rows($sql_query);

	if(!$found)
	{
		$update_message=2;
		header("location:locations.php?update_message=$update_message");
		exit();
	}

	$sql = "UPDATE locations SET name='$name' WHERE location_id='$location_id'";
	$sql_query = mysqli_query($con, $sql);

	if($sql_query) $update_message=1;
	else $update_message=0;
	header("location:locations.php?update_message=$update_message");
	exit();
?>