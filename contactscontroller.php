<?php
require_once 'model/contactsservice.php';

class contactscontroller{
	public function __construct(){
		$this->contactsservice = new contactsservice();
	}
	public function listcontacts(){
		if (!isset($_GET['name']))
		{
			//show all contacts
			$names = $this->contactsservice->getAllContacts();			
			include 'view/contacts.php';
		}
		else
		{
			//show the requested contact
			$name = $this->contactsservice->getContacts($_GET['name']);
			include 'view/contacteach.php';
		}		
	}
}
?>
