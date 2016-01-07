<html>
<head>
	<title>View Contacts</title>
</head>
<body>
	<p><a href="getdetails.php"> Add new contact </a><p><br/>
	<table>
		
			<tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th></tr>
		
		<tbody>
			<?php
				$result1=$_SESSION['result1'];				
				while($row = $result1->fetch_assoc()) {
					echo '<tr><td><a href="index.php?name='.$row["name"].'">'.$row["name"].'</a></td><td>'.$row["phone"].'</td><td>'.$row["email"].'</td><td>'.$row["address"].'</td><td><a href="deletedetails.php?name='.$row["name"].'"> delete </a></td></tr>';
				}
			?>
		</tbody>
	</table>
	
</body>
</html>
