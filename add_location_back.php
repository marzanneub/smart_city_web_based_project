<?php
require('admin_check.php');

    $name = $_POST['name'];
    echo $name;

	$sql = "INSERT INTO locations VALUES ('', '$name')";
	$sql_query = mysqli_query($con, $sql);
	if($sql_query)
	{
		$add_message=1;
		header("location:locations.php?add_message=" . urlencode($add_message));
		exit();
	}
	else
	{
		$add_message=0;
		header("location:locations.php?add_message=" . urlencode($add_message));
		exit();
	}
?>