<?php
	//include the controller
	require('../controllers/personcontroller.php');	
	
	$getid =  $_GET['cid'];
	

		//call the function for display
		$clist = delcontactctrl($getid);

		if ($clist) {
			echo "Contact deleted";	
		}else{
			echo "Failed to delete contact";
		}

?>