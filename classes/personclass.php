<?php
//include the database class
require('../settings/db_class.php');

/**
 * 
 */
class person_class extends db_connection
{
	//properties
	public $user_id = null;
	public $user_name = null;

	//method for insert
	public function addcontact_mthd($a, $b, $c, $d){
		//write the query
		$sql = "INSERT INTO `studentlist`(`pname`, `email`, `pcontact`, `pdob`) VALUES('$a', '$b', '$c', '$d')";

		//run the query
		return $this->db_query($sql);

	}

	//a method for viewing all contact
	public function viewall_contact_mthd(){
		//write a query
		$sql = "SELECT * FROM studentlist";

		//return the executed query
		return $this->db_query($sql);
	}
	//a method for deleting a contact
	public function del_contact_mthd($a){
		//write a query
		$sql = "DELETE FROM studentlist WHERE pid=$a";

		//return the executed query
		return $this->db_query($sql);
	}

	//method for updating a contact
	public function updatecontact_mthd($a, $b, $c, $d, $e){
		//write the query

		$sql = " UPDATE studentlist
		SET pname = '$b', email= '$c', pcontact= '$d', pdob= '$e'
		WHERE pid = $a";


		//run the query
		return $this->db_query($sql);
	}

}	

?>