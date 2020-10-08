<?php

	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "wda_day2";


	// Create connection
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

	// Check connection
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}
	  // echo "Connected successfully"."\n\n";

?>