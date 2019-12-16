<?php

//initiate the session
session_start();
//include the controller
require('../controllers/personcontroller.php');

//check if submit button was click
if (isset($_GET['uedit'])) {

    //grab form data and store in variable
    $pid = $_GET['uid']; 
	$pname = $_GET['uname'];
	$pemail = $_GET['uemail'];
	$pphone = $_GET['uphone'];
    $pdob = $_GET['udob']; 
    
    echo $pid;
    echo $pname;

	//email and name validation
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

	//call function to update
	if ($bol) {
        $ret =  updatecontactctrl($pid, $pname, $pemail, $pphone, $pdob);
        
	}
	

	//echo result
	if ($ret) {
		$_SESSION['updated'] = "<h4 style = 'color: green'>Contact Updated !</h4>";
		// $_SESSION['namerror'] = $nameErr;
		// echo "Contact Updated";
	}else{
		$_SESSION['updated'] = "Update failed !";
		// echo "Update failed";
	}

}

header( "Location:http://localhost/WebTech-Exams/view/listcontact.php" );



?>