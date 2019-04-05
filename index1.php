 <?php  
 $con=mysqli_connect("localhost","root","","mydb");
 $username=(isset($_POST['u_name']) ? $_POST['u_name'] : '');
 $password=(isset($_POST['password']) ? $_POST['password'] : '');

 if(isset($_POST['login1']))
 {
 	$getUser=mysqli_query($con,"SELECT * FROM registrationf WHERE u_name='$username' and password='$password'");
 	if($getUser -> num_rows == 1)
 	{
 		echo"<script type='text/javascript'>alert('Sign in successful!!')</script>";
			header("Location: homepage.php");
 	}
 	else
 	{
 		echo"<script type='text/javascript'>alert('Invalid Credentials. Please try again!!')</script>";
 	}
 }
?>


 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" name="viewport" content="width-device-width,initial-state-1"/>
	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="Assets/IndexStyle-2.css">
	<title>Login</title>
</head>
<body>
<h1 class="text-center">Login</h1>
		<div class="container container-small" align="center">
				<form class="well form-horizontal" method="post"  id="register_form">
		<fieldset>
		<div class="form-group">
 				<label class="col-md-4 control-lable" for="username">Username</label>
 					<div class="col-md-4 inputGroupContainer">
 						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
 		 				<input type="text" id="username" class="form-control" name="u_name" placeholder="Enter Username" required>
 		 				</div>
 		 			</div>
 			</div>
			
		<div class="form-group">
 				<label class="col-md-4 control-lable" for="password">Password</label>
 					<div class="col-md-4 inputGroupContainer">
 						<div class="input-group">
  						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
 		 				<input type="password" id="password" class="form-control" name="password" placeholder="Enter Password" required>
 		 				</div>
 		 			</div>
 			</div>
			<div align="center">
 			 	<button type="submit" name="login1" class="btn btn-warning">Login</button>
 			 </div>
		<br/>
		<div align="center">New User? Register Below</div>
		<br/>
		<div align="center">
 			 	<button type="button" class="btn btn-warning"onClick="window.location.href='register.php'">Register</button>
 			 </div>
	</form>
	</div>
</body>
</html>