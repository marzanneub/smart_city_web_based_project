<?php
require('admin_check.php');

    $p_id = $_POST['p_id'];
    $p_t_id = $_POST['p_t_id'];

    if($p_id==0)
	{
		$delete_message=2;
		header("location:services_admin.php?delete_message=" . urlencode($delete_message) . "&p_t_id=" . urlencode($p_t_id));
		exit();
	}

	$sql = "DELETE FROM place WHERE p_id='$p_id'";
	$sql_query = mysqli_query($con, $sql);
	
	if($sql_query)
	{
		$delete_message=1;
		header("location:services_admin.php?delete_message=" . urlencode($delete_message) . "&p_t_id=" . urlencode($p_t_id));
		exit();
	}
	else
	{
		$delete_message=0;
		header("location:services_admin.php?delete_message=" . urlencode($delete_message) . "&p_t_id=" . urlencode($p_t_id));
		exit();
	}
?>