<?php

$con = mysqli_connect("localhost","root","","odalfgsm3b");
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
		}

date_default_timezone_set('Asia/Karachi');	
$error="";	

?>