<html>
<head>
	<title>Form</title>
</head>
<body>
<center>
	<h3>Enter the Details</h3><br/><br/>
	<table>
	<form method="GET">
		<tr><th>Name:</th>
			<td><input type="text" name="name"></td></tr>
		<tr><th>Phone:</th>
			<td><input type="text" name="phone"></td></tr>
		<tr><th>Email:</th>
			<td><input type="email" name="email"></td></tr>
		<tr><th>Address:</th>
			<td><textarea name="address"></textarea></td></tr>
		<tr><th></th>
			<td><input type="submit" name="submit" value="Submit"></td></tr>	
	</form>
	</table>
		<?php	
			if(isset($_GET['submit'])){
				if (isset($_GET['name'])) $name=$_GET['name']; else $name="";
				if (isset($_GET['phone'])) $phone=$_GET['phone']; else $phone="";
				if (isset($_GET['email'])) $email=$_GET['email']; else $email="";
				if (isset($_GET['address'])) $address=$_GET['address']; else $address="";
				
				include 'connect.php';
				$sql = "INSERT INTO details (name,phone,email,address) VALUES ('$name','$phone','$email','$address')";
				
				if ($conn->query($sql) === TRUE) {
					echo '<center>Insert successfully<br/></center>';
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}		
			}
		?>
	<br/><a href="index.php"> View </a>
</center>
</body>
</html>
