<?php
require('admin_check.php');

    $init_id = $_POST['init_id'];

    if($init_id==0)
	{
		$delete_message=2;
		header("location:initiatives.php?delete_message=" . urlencode($delete_message));
		exit();
	}

	$sql = "DELETE FROM initiative WHERE init_id='$init_id'";
	$sql_query = mysqli_query($con, $sql);
	
	if($sql_query)
	{
		$delete_message=1;
		header("location:initiatives.php?delete_message=" . urlencode($delete_message));
		exit();
	}
	else
	{
		$delete_message=0;
		header("location:initiatives.php?delete_message=" . urlencode($delete_message));
		exit();
	}
?>