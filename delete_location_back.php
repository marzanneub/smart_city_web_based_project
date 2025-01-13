<?php
require('admin_check.php');

    $location_id = $_POST['location_id'];

	$sql = "SELECT * FROM place WHERE location_id='$location_id'";
	$sql_query = mysqli_query($con, $sql);
	$found = mysqli_num_rows($sql_query);

	if($found>0)
	{
		$delete_message=3;
		header("location:locations.php?delete_message=" . urlencode($delete_message));
		exit();
	}

    if($location_id==0)
	{
		$delete_message=2;
		header("location:locations.php?delete_message=" . urlencode($delete_message));
		exit();
	}

	$sql = "DELETE FROM locations WHERE location_id='$location_id'";
	$sql_query = mysqli_query($con, $sql);
	
	if($sql_query)
	{
		$delete_message=1;
		header("location:locations.php?delete_message=" . urlencode($delete_message));
		exit();
	}
	else
	{
		$delete_message=0;
		header("location:locations.php?delete_message=" . urlencode($delete_message));
		exit();
	}
?>