<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'smart_city_web_based_project';
		
	$con = mysqli_connect($host, $username, $password);
	$selectdb = mysqli_select_db($con, $dbname);
?>