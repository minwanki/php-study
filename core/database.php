<?php  
	$conn =  mysql_connect("127.0.0.1", "root", "") or die("Could not connect:".mysql_error());
	mysql_select_db("sunday", $conn);
	// var_dump($conn);

?>