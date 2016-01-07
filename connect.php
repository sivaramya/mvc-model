<?php 
	$server = 'localhost';
	$uname = 'root';
	$pword = '';
	$dbname = 'contacts';
	session_start();
	
	// Create connection
	$conn = new mysqli($server, $uname, $pword, $dbname);
	$_SESSION['connection']=$conn;
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
?>
	
	
