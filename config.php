<?php

	$servername = "localhost";
        $username = "root";
        $password = "";
        $database = "bank_db";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Error IN Connection with Database. Error--> ".mysqli_connect_error());
	}

?>
