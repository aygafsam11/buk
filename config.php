<?php

	$servername = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "buk_siwes";

	//create a connection
	$conn = mysqli_connect("$servername", "$user", "$pass", "$dbName");
	//check connection
	if(!$conn){
		die("Connection Failed: " . mysqli_error());
	}
	
?>