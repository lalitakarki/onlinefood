<?php
$con=mysqli_connect("localhost","root","", "mydb");
$fname=(isset($_POST['f_name']) ? $_POST['f_name'] : '');
$lname=(isset($_POST['l_name']) ? $_POST['l_name'] : '');
$contact=(isset($_POST['contact']) ? $_POST['contact'] : '');
$Email=(isset($_POST['Email']) ? $_POST['Email'] : '');
$username=(isset($_POST['username']) ? $_POST['username'] : '');
$password=(isset($_POST['password']) ? $_POST['password'] : '');
$employee=(isset($_POST['userType']) ? $_POST['userType'] : '');

if(isset($_POST['submit1']))
{
	$sqlCheckDbForUName = mysqli_query($con, "select * from registrationf where u_name='$username'");
	$countRows = intval($sqlCheckDbForUName->num_rows);
	echo "$countRows";
	if($countRows> 0)
	{
		echo "<script type='text/javascript'>alert('Username Exists, Please try another username!!')</script>";
	}
	else
	{
		$sq12=mysqli_query($con,"INSERT into registrationf values('','$fname','$lname','$contact','$Email','$username','$password','$employee')");
		if($sq12)
		{
			header("Location: index.php?registered=true");
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8" name="viewport" content="width-device-width,initial-state-1"/>
 <link rel="stylesheet" href="css/bootstrap.css">
 
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
 <link rel="stylesheet" type="text/css" href="Assets/registration.css">
 <!--<script src="Assets/actions.js"></script>-->
<title>Registration</title>
</head>
<body>
<h1 class="text-center">REGISTER</h1>
		<div class="container">
				<form class="well form-horizontal"  method="post"  id="register_form">
		<fieldset>
			 <legend>Personal Information</legend>
 			<div class="form-group">
 				<label class="col-md-4 control-lable">First Name</label>
 					<div class="col-md-4 inputGroupContainer">
 						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 		 				<input type="text" id="f_name" class="form-control" name="f_name" placeholder="Enter your first name" required>
 		 				</div>
 		 			</div>
 			</div>
			<br/>

 			<div class="form-group">
 				<label class="col-md-4 control-lable">Last Name</label>
 				  	<div class="col-md-4 inputGroupContainer">
  						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 						<input type="text" id="l_name" class="form-control" name="l_name" placeholder="Enter your last name" required>
 			 			</div>
 				  	</div>
 			</div>
			<br/>

 			<div class="form-group">
 				<label class="col-md-4 control-lable">Contact Number</label>
 				  	<div class="col-md-4 inputGroupContainer">
  						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
 						<input type="number" id="contact" class="form-control" name="contact" placeholder="Enter Phone number" required onKeyPress="if (this.value.length==10) return false;">
 				 		</div>
 					</div>
 			</div>
			<br/>

 			<div class="form-group">
 				<label class="col-md-4 control-lable">Email</label>
 					<div class="col-md-4 inputGroupContainer">
  						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
 						<input type="Email" id="Email" class="form-control" name="Email" placeholder="Enter Email ID" required>
 			 			</div>
 					</div>
 			</div>
			<br/>

 			<div class="form-group">
 				<label class="col-md-4 control-lable">User Name</label>
 			 	  	<div class="col-md-4 inputGroupContainer">
  						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 						<input type="text" id="username" class="form-control" name="username" placeholder="Create a unique username" required>
 			 			</div>
 					</div>
 			</div>
			<br/>

 		    <div class="form-group">
 				<label class="col-md-4 control-lable">Password</label>
 				   <div class="col-md-4 inputGroupContainer">
  						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
 						<input type="password" name="password" class="form-control" name="password" placeholder="Enter password" required>
 			 			</div>
 					</div>
 			</div>
			<br/>
			
			<div class="form-group">
 				<label class="col-md-4 control-lable">User Type</label>
 				   <div class="col-md-4 inputGroupContainer">
  						<div class="custom-control custom-radio">
  						<label class="custom-control-label"><input type="radio" name="userType" id="customRadio" class="custom-control-input" value="Employee" required>Employee</label>
						
						<label class="custom-control-label"><input type="radio" value="Customer" class="custom-control-input" name="userType" required>Customer</label>
 			 			</div>
 					</div>
 			</div>
			<br/>

 			 <div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i></div>
 			 <div class="col-md-4">
 			 	<button type="submit"  align="center" class="btn btn-success btn-center" name="submit1">SUBMIT</button>
 			 </div>
		</fieldset>
	</form>
</div>
</body>
</html>
