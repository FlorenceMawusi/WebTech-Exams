<?php

//initiate the session
session_start();
//include the controller
require('../controllers/personcontroller.php');

//check if submit button was click
if (isset($_GET['uadd'])) {
	//grab form data and store in variable
	
	$pemail = $_GET['uemail'];
	$pphone = $_GET['uphone'];
	$pdob = $_GET['udob']; 


	$bol = true;

	if (!filter_var($pemail, FILTER_VALIDATE_EMAIL)) {
		$bol = false;
		$emailErr = "email incorrect";
	}

	if (isset($_GET['uname']) && !empty($_GET['uname'])) {
		$pname = $_GET['uname'];
	  } else {
		$bol = false;
		$nameErr = "name incorrect";
	}

	//call function to add
	if ($bol) {
		$ret =  addcontactctrl($pname, $pemail, $pphone, $pdob);
	}
	

	//echo result
	if ($ret) {
		$_SESSION['added'] = "New contact Inserted";
		$_SESSION['namerror'] = $nameErr;
		// echo "New contact Inserted";
	}else{
		$_SESSION['added'] = "Insert failed";
		// echo "Insert failed";
	}

}

header( "Location:http://localhost/WebTech-Exams/view/addcontact.php" );



?>