<?php

session_start();

require_once './connection.php' ;

if(isset($_POST['create'])){
	$sql="INSERT INTO create_login(Name, Contact_No, Password) VALUES('" . $_POST["Name"] . "','" . $_POST["Phone"] . "','" . $_POST["password"] . "')";
	$result = mysqli_query($conn, $sql);
	//$_SESSION["name"] = $_POST["Name"];
	//header("Location: youraccount.php");
	$message = $result ? "Account created! Please Login" : "Unable to create ";
	
} else if(isset($_POST["login"]))
{	
	$username=$_POST['lphone'];	
	$password=$_POST['lpassword'];
	
	$sql = "SELECT * FROM create_login WHERE contact_no='$username' and password = '$password'";
	$result = $conn->query($sql);	

	if($result->num_rows > 0)
	{	
		$row = mysqli_fetch_array($result);
		$_SESSION["contact_no"] = $row['Contact_No'];
		$_SESSION["name"] = $row['Name'];
		header("Location: youraccount.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <style>
	.col-md-5{
		border: 1px solid #bec9db;
		padding-bottom: 20px;
		border-radius: 10px;
		background-color: #eff0f2;
		font-family: Times New Roman;
		padding-top: 40px;
		float: left;
	}
	 .container{
		 font-family: Times New Roman;
		 padding-top: 40px;
	 }
	 .container-fluid{
		 background-color: #454141;
		 color: white;
		 margin-top: 60px;
	 }
</style>
  <title>Personal Expense Manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">	 
  <script src="jsjquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body style="background: linear-gradient(to top right, #eff0f2 0%, #ffffff 100%)">
 <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
  <a class="navbar-brand" href="index.php">Personal Expense Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>  
    </ul>
  </div>  
</nav>
<div class="container" style="margin-top:80px">
 <div class="row">
    <div class="col-md-5">
   		<form action="index.php" method="post" name="myForm1">
    		<h1>Create an account</h1><hr>
			<div class="form-group">
				<label for="usr">Name:</label>
				<input type="text" name="Name" placeholder="Please enter your full name" class="form-control" pattern="[A-Za-z ]+" required>
			</div>
			<div class="form-group">
      			<label for="usr">Contact No:</label>
				<input type="text" name="Phone" placeholder="Please enter your contact no" class="form-control" pattern="[0-9]{10}" title="Please enter 10 digit mobile no" required>
			</div>
			<div class="form-group">
      			<label for="usr">Password:</label>
				<input type="password" name="password" placeholder="Enter your password no" class="form-control" required>
			</div>
			(Note: Contact No will be use as Username)<br>
			<?PHP
						if(isset($message)) {
							echo '<br>';
							echo $message;	
							echo '<br>';	
						}
					?>
			<input type="submit" name="create" value="Create" class="btn btn-secondary" />
			<input type="reset" value="Reset form" class="btn btn-secondary">
		</form>
    </div>
    <div class="col-md-2" > 
			<div style="float: left; width: 1px; height: 460px; background-color:#bec9db;  border-left:1px solid #e4dae8; border-left-width: 1px; margin-left: 50px"></div>
			<div style="float: left; width: 60px; height: 60px; background-color:#eff0f2;  border:solid #bec9db; border-width: 1px; border-radius: 30px; margin-top: 180px; margin-left:-33px; text-align: center; padding-top: 15px">Or</div>
    </div>
    <div class="col-md-5" > 
    <form class="form-group" action="index.php" method="post">
 			<h1>Login</h1><hr>	
 			<div class="form-group">		
				<label for="usr">Contact No:</label>
				<input type="text" name="lphone" placeholder="Please enter username" class="form-control" pattern="[0-9]{10}" title="Please enter 10 digit mobile no" required>
			</div>
			<div class="form-group">
      			<label for="usr">Password:</label>
				<input type="password" name="lpassword" placeholder="Enter your password no" class="form-control" required>
			</div>			
			<input type="submit" name="login" value="Login" class="btn btn-secondary"/>
			<input type="reset" value="Reset form" class="btn btn-secondary">
			</form>
    </div>
  </div> 
</div>
	<div class="container-fluid">
		<div class="container">
 		  	<div class="row">
   		  		<div class="col-md-6" > 
					<h3>Get In Touch</h3>
 		  			<p><i class="fa fa-envelope-o" style="font-size:24px"></i><a href="mailto:latesh894@gmail.com">
					latesh894@gmail.com</a></p>
 		  		
						<p><i class="fa fa-phone"></i>  +91 7977343838</p>
						
  		  		</div>
  		  		<div class="col-md-6" >
  	
  		  			<h3>Follow Us</h3>
						<a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-2x"></i></a>&nbsp;&nbsp;&nbsp;
						<a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-2x"></i></a>&nbsp;&nbsp;&nbsp;		
  		  		</div>
		</div>
		<div class="row">
			<div class="col-md-12" >
				<hr style="background-color: white">
				 <center><b>&copy &nbsp; All Rights Reserved 2020 </b></center>
			</div>
		</div>
	</div>

	</div>
</body>
</html>