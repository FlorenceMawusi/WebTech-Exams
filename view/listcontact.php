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
	<div class="container">
	
	<table class="table table-hover ">
		<thead>
		<tr>

			<th>Name</th>
			<th>Email</th>
			<th>Contact</th>
			<th>Date of Birth</th>
			<th>What do you want to do?</th>

		</tr>
		</thead>
		<tbody>
	<?php
	session_start();
		//include the controller
		require('../controllers/personcontroller.php');

		//cal the function for display
		$clist = viewallcontactctrl();
		if ($clist) {
			
			
			foreach ($clist as $key => $value) {
				$myid = $value['pid'];
				$myname = $value['pname'];
				$myemail = $value['email'];
				$mycontact = $value['pcontact']; 
				$mydob = $value['pdob'];
				

				echo "<tr>";
				echo "<td>$myname</td>";
				echo "<td>$myemail</td>";
				echo "<td>$mycontact</td>";
				echo "<td>$mydob</td>";
				echo "<td><a href='delete.php?cid=$myid' class= 'btn btn-outline-danger'>Delete</a>
				| <a href='update.php?cid=$myid&cname=$myname&cemail=$myemail&ccontact=
				$mycontact&cdob=$mydob' class= 'btn btn-outline-success'>Update</a>
		</td>";

  echo "</tr>";

				
			}
			   

		}else{
			echo "Not working";
		}

		
	if (isset($_SESSION['updated'])) {
		echo $_SESSION['updated'];
	}

	unset($_SESSION['updated']);

	if (isset($_SESSION['deleted'])) {
		echo $_SESSION['deleted'];
	}

	unset($_SESSION['deleted']);	
	?>
	</tbody>
  	</table>	
</body>
</html>