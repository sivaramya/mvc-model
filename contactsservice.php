<?php
require_once 'model/contactsgateway.php';

class contactsservice{
	public function __construct(){
		$this->contactsgateway = new contactsgateway();
	}
	private function openDB(){
		include './connect.php';
	}
	private function clossDB(){
		$conn->close();
	}
	public function getAllContacts(){
		
		$this->openDB();
		
		$allContacts = $this->contactsgateway->selectAll();
		return $allContacts;
	}
	public function getContacts($name){
		
		$this->openDB();
		
		$oneContacts = $this->contactsgateway->selectOne($name);
		return $oneContacts;
	}
}
?>
