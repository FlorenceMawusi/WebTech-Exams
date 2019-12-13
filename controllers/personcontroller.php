<?php
//call on the person class
require('../classes/personclass.php');

//controller function to add
function addcontactctrl($a, $b, $c, $d){
	//create a new instance of the class
	$insertp = new person_class;

	//run the insert method
	$checkinsert = $insertp->addcontact_mthd($a, $b, $c, $d);

	if ($checkinsert) {
		return $checkinsert;
	}else{
		return false;
	}

	//return result
}

//controller function to view all contact
function viewallcontactctrl(){
	//create an instance of the contact class
	$displayc = new person_class();

	//run the view all method in the class
	$contactlist = $displayc->viewall_contact_mthd();

	if ($contactlist) {
		//array
		$db_contactlist = array();
			while ($record = $displayc->db_fetch()) {
				# code...
				$db_contactlist[] = $record;
			}
			//return the array
		return $db_contactlist;
	}else{
		return false;
	}
}

//controller function to delete
function delcontactctrl($a){
	//create a new instance of the class
	$deletep = new person_class;

	//run the insert method
	$checkdelete = $deletep->del_contact_mthd($a);

	if ($checkdelete) {
		return $checkdelete;
	}else{
		return false;
	}

	//return result
}
?>