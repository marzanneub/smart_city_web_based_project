<?php
require('admin_check.php');

    $name = $_POST['name'];
    $location_id = $_POST['location_id'];
    $phone_number = $_POST['phone_number'];
    $web_address = $_POST['web_address'];
    
    if($location_id==0)
	{
        $add_message=3;
		header("location:hospitals_admin.php?add_message=" . urlencode($add_message));
		exit();
	}

    for($i=0; $i<strlen($phone_number); $i++)
	{
		if($phone_number[$i]<'0' || $phone_number[$i]>'9')
		{
            $add_message=2;
			header("location:hospitals_admin.php?add_message=" . urlencode($add_message));
			exit();
		}
	}

	$sql = "INSERT INTO place VALUES ('', '$name', '1', '$location_id', '$phone_number', '$web_address', '', '')";
	$sql_query = mysqli_query($con, $sql);
	if($sql_query)
	{
		$add_message=1;
		header("location:hospitals_admin.php?add_message=" . urlencode($add_message));
		exit();
	}
	else
	{
		$add_message=0;
		header("location:hospitals_admin.php?add_message=" . urlencode($add_message));
		exit();
	}
?>