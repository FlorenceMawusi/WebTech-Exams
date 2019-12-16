<?php
	session_start();
	//include the controller
	require('../controllers/personcontroller.php');	
	
	$getid =  $_GET['cid'];
	

		//call the function to delete
		$deletec = delcontactctrl($getid);

		if ($deletec) {
			$_SESSION['deleted'] = "<h4 style = 'color: red'>Contact Deleted!</h4>";	
		}else{
			$_SESSION['deleted'] = "Delete failed !";
		
		}

	header( "Location:http://localhost/WebTech-Exams/view/listcontact.php" );

?>		
}