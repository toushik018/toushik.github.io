<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$database = "kyau";

// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

// Check connection
	if ($conn->connect_error) {
  		die("Connection failed: " . $conn->connect_error);
	}
	
	if(!session_start())
	{
		session_start();
		$_SESSION['login'] = 0;
	}
	
	if(session_status() == PHP_SESSION_NONE)
	{
	$_SESSION['login'] = 0;
	}

?>