<?php
	include 'connect.php';
	$name = $_GET['name'];
	 
	$sql = "DELETE FROM details WHERE name='$name'";
	$conn->query($sql);
	 
	header("Location: index.php");
?>
