<?php
require('admin_check.php');

    $name = $_POST['name'];
    $p_t_id = $_POST['p_t_id'];
    $location_id = $_POST['location_id'];
    $web_address = $_POST['web_address'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    
    if($location_id==0)
	{
        $add_message=3;
		header("location:things_to_do_admin.php?add_message=" . urlencode($add_message) . "&p_t_id=" . urlencode($p_t_id));
		exit();
	}

	$sql = "INSERT INTO place VALUES ('', '$name', '$p_t_id', '$location_id', '', '$web_address', '$image', '$description')";
	$sql_query = mysqli_query($con, $sql);
	if($sql_query)
	{
		$add_message=1;
		header("location:things_to_do_admin.php?add_message=" . urlencode($add_message) . "&p_t_id=" . urlencode($p_t_id));
		exit();
	}
	else
	{
		$add_message=0;
		header("location:things_to_do_admin.php?add_message=" . urlencode($add_message) . "&p_t_id=" . urlencode($p_t_id));
		exit();
	}
?>