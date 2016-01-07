<html>
	<head>
		<title>View a contact</title>
	</head>
	<body>
		
		<table>
		<thead>
			<tr><th>Name</th><th>Phone</th><th>Email</th><th>Address</th></tr>
		</thead>
		<tbody>
			<?php
				$result2=$_SESSION['result2'];
				while($row = $result2->fetch_assoc()) {
					echo '<tr><td>'.$row["name"].'</td><td>'.$row["phone"].'</td><td>'.$row["email"].'</td><td>'.$row["address"].'</td></tr>';
				}
			?>
		</tbody>
	</table>
	</body>
</html>
