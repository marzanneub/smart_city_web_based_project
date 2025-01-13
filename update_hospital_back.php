<?php
require('admin_check.php');

	$p_id = $_POST['p_id'];
	$name = $_POST['name'];
    $location_id = $_POST['location_id'];
    $phone_number = $_POST['phone_number'];
    $web_address = $_POST['web_address'];
	$x = 0;
	
	$sql = "SELECT * FROM place WHERE p_id='$p_id'";
	$sql_query = mysqli_query($con, $sql);
	$found = mysqli_num_rows($sql_query);

	if(!$found)
	{
		$update_message=2;
		header("location:hospitals_admin.php?update_message=$update_message");
		exit();
	}

    if(strlen($phone_number))
	{
        for($i=0; $i<strlen($phone_number); $i++)
        {
            if($phone_number[$i]<'0' || $phone_number[$i]>'9')
            {
                $update_message=3;
                header("location:hospitals_admin.php?update_message=" . urlencode($update_message));
                exit();
            }
        }

		$sql = "UPDATE place SET phone_number='$phone_number' WHERE p_id='$p_id'";
		$sql_query = mysqli_query($con, $sql);
		$x++;
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

	if($x) $update_message=1;
	else $update_message=0;
	header("location:hospitals_admin.php?update_message=$update_message");
	exit();
?>