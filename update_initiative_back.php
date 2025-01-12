<?php
require('admin_check.php');

	$init_id = $_POST['init_id'];
	$image = $_POST['image'];
    $title = $_POST['title'];
    $description = $_POST['description'];
	$x = 0;
	
	$sql = "SELECT * FROM initiative WHERE init_id='$init_id'";
	$sql_query = mysqli_query($con, $sql);
	$found = mysqli_num_rows($sql_query);

	if(!$found)
	{
		$update_message=2;
		header("location:initiatives.php?update_message=$update_message");
		exit();
	}

	if(strlen($image))
	{
		$sql = "UPDATE initiative SET image='$image' WHERE init_id='$init_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}
	if(strlen($title))
	{
		$sql = "UPDATE initiative SET title='$title' WHERE init_id='$init_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}
	if(strlen($description))
	{
		$sql = "UPDATE initiative SET description='$description' WHERE init_id='$init_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
	}

	if($x) $update_message=1;
	else $update_message=0;
	header("location:initiatives.php?update_message=$update_message");
	exit();
?>