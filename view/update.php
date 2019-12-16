<?php




	//grab url data and store in variable
	
	$getid = $_GET['cid'];
    $getname = $_GET['cname'];
    $getemail = $_GET['cemail'];
    $getcontact = $_GET['ccontact'];
    $getdob = $_GET['cdob'];
	
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

	<h1><a href="../index.php">Back to Home</a></h1>
		
		<form action="updateprocess.php">
		  <div class="form-row">
		    <div class="col-md-4 mb-3">
		      <label for="validationDefault01">Name</label>
		      <input type="text" name="uname" class="form-control" id="validationDefault01" 
			  placeholder="First name" required value = <?php echo $getname ?> >
		    </div>
			<input type="hidden" name="uid" class="form-control" id="validationDefault01" 
			  value = <?php echo $getid ?> >

		    <div class="col-md-4 mb-3">
		      <label for="validationDefault02">Email</label>
		      <input type="Email" class="form-control" id="validationDefault02" 
			  placeholder="Email" name="uemail" required value = <?php echo $getemail ?>>
		    </div>
		  </div>
		  <div class="form-row">
		    <div class="col-md-6 mb-3">
		      <label for="validationDefault03">Phone</label>
		      <input type="tel" name="uphone" class="form-control" id="validationDefault03" 
			  placeholder="Phone Number" maxlength="10" required value = <?php echo $getcontact ?>>
		    </div>
		    <div class="col-md-3 mb-3">
		      <label for="validationDefault04">Date of Birth</label>
		      <input type="Date" name="udob" class="form-control" id="validationDefault04" 
			  placeholder="Date of Birth" required value = <?php echo $getdob ?>> 
		    </div>
		  </div>
		  <button class="btn btn-primary" name="uedit" type="submit">Edit Contact</button>
		</form>

		

		

</body>
</html>