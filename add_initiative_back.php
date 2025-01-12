<?php
require('admin_check.php');

    $image = $_POST['image'];
	$title = $_POST['title'];
    $description = $_POST['description'];

	$sql = "INSERT INTO initiative VALUES ('', '$image', '$title', '$description')";
	$sql_query = mysqli_query($con, $sql);
	if($sql_query)
	{
		$add_message=1;
		header("location:initiatives.php?add_message=" . urlencode($add_message));
		exit();
	}
	else
	{
		$add_message=0;
		header("location:initiatives.php?add_message=" . urlencode($add_message));
		exit();
	}
?>