<?php
require('connect.php');
	
	$sql = "SELECT * FROM admin WHERE login='1'";
	$sql_query = mysqli_query($con, $sql);
	$found = mysqli_num_rows($sql_query);
	
	if($found)
	{
		$row = mysqli_fetch_assoc($sql_query);
		$admin_id = $row['admin_id'];
		
		header("Location: admin_landing.php?admin_id=" . urlencode($admin_id));
		exit();
	}
?>
