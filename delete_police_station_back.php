<?php
require('admin_check.php');

    $p_id = $_POST['p_id'];

    if($p_id==0)
	{
		$delete_message=2;
		header("location:police_stations_admin.php?delete_message=" . urlencode($delete_message));
		exit();
	}

	$sql = "DELETE FROM place WHERE p_id='$p_id'";
	$sql_query = mysqli_query($con, $sql);
	
	if($sql_query)
	{
		$delete_message=1;
		header("location:police_stations_admin.php?delete_message=" . urlencode($delete_message));
		exit();
	}
	else
	{
		$delete_message=0;
		header("location:police_stations_admin.php?delete_message=" . urlencode($delete_message));
		exit();
	}
?>