<?php
//session_start();
class contactsgateway{
	
	public function selectAll(){
		//query to get the details
		$conn = $_SESSION['connection'];
		$sql1 = 'SELECT * FROM details ORDER BY name';
		$result1 = $conn->query($sql1);
		$_SESSION['result1']=$result1;
		
		//query to get the details
		if ($result1->num_rows > 0) {
			// output data of each row
			return $result1;
		} else {
			return "0 results";
		}
	}
	public function selectOne($name){
		//query to get the details
		$conn = $_SESSION['connection'];
		$sql2 = "SELECT * FROM details WHERE name='$name' ORDER BY name";
		$result2 = $conn->query($sql2);
		$_SESSION['result2']=$result2;
		
		//query to get one detail
		if ($result2->num_rows > 0) {
			// output data of each row
			return $result2;
		} else {
			return "0 results";
		}
	}
}
?>
