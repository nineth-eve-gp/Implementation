<?php 

	$con = @mysqli_connect('localhost', 'root', '', 'student_info');

	if (!$con) {
	    echo "Error: " . mysqli_connect_error();
		exit();
	}
	
	$value = $_POST ['Index_Number'];
	$sqli = "INSERT INTO registration (Index_Number) VALUES ($value)";
	//echo 'Connected to Database';

?>