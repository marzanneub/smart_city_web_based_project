<?php
require('admin_check.php');

	$p_id = $_POST['p_id'];
	$name = $_POST['name'];
    $p_t_id = $_POST['p_t_id'];
    $location_id = $_POST['location_id'];
    $web_address = $_POST['web_address'];
    $image = $_POST['image'];
    $description = $_POST['description'];
	$x = 0;
	
	$sql = "SELECT * FROM place WHERE p_id='$p_id'";
	$sql_query = mysqli_query($con, $sql);
	$found = mysqli_num_rows($sql_query);

	if(!$found)
	{
		$update_message=2;
		header("location:things_to_do_admin.php?update_message=" . urlencode($update_message) . "&p_t_id=" . urlencode($p_t_id));
		exit();
	}

    if(strlen($name))
	{
		$sql = "UPDATE place SET p_name='$name' WHERE p_id='$p_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}
    if($location_id!=0)
	{
		$sql = "UPDATE place SET location_id='$location_id' WHERE p_id='$p_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}
    if(strlen($web_address))
	{
		$sql = "UPDATE place SET web_address='$web_address' WHERE p_id='$p_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}
    if(strlen($image))
	{
		$sql = "UPDATE place SET image='$image' WHERE p_id='$p_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}
    if(strlen($description))
	{
		$sql = "UPDATE place SET description='$description' WHERE p_id='$p_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}

	if($x) $update_message=1;
	else $update_message=0;
	header("location:things_to_do_admin.php?update_message=" . urlencode($update_message) . "&p_t_id=" . urlencode($p_t_id));
	exit();
?>