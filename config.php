<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sa";

	$conn = mysqli_connect($servername, $username, $password, $dbname,"3307");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>