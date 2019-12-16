<!DOCTYPE html>
<html>
<head>
	<title>Add Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
	<h1><a href="../index.php">Back to Home</a></h1>
	<h1>List of all contacts</h1>
	<?php
	session_start();
		//include the controller
		require('../controllers/personcontroller.php');

		//cal the function for display
		$clist = viewallcontactctrl();
		if ($clist) {
			//print_r($clist);
			//echo "<br><br>";
			//var_dump($clist);
			// iterating over an array 
			//foreach ($clist as $value) {
			    // $arr[3] will be updated with each value from $arr...
			
			foreach ($clist as $key => $value) {
				$myid = $value['pid'];
				$myname = $value['pname'];
				$myemail = $value['email'];
				$mycontact = $value['pcontact'];
				$mydob = $value['pdob'];
				

				echo $value['pname']. "<a href='delete.php?cid=$myid'>Delete</a> 
				| <a href='update.php?cid=$myid&cname=$myname&cemail=$myemail&ccontact=$mycontact&cdob=$mydob'>Update</a> <br>";
			}
			   // echo $clist[1]['pname'];
			    //echo $clist[1]['email'];
			    //echo $clist[1]['pcontact'];
			    //echo $clist[1]['pdob'];
			    //echo "<br>";
			    //print_r($arr);
			//}

		}else{
			echo "Not working";
		}

		
	if (isset($_SESSION['updated'])) {
		echo $_SESSION['updated'];
	}

	unset($_SESSION['updated']);

		
	?>	
</body>
</html>