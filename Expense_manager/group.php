<?php

session_start();

require_once './connection.php' ;

if(isset($_POST['create'])){

	$cnt = $_SESSION["contact_no"];
	$sql="INSERT INTO group_create(group_code, Contact_No) VALUES('" . $_POST["cgroup"] . "','" . $cnt . "')";
	$result = mysqli_query($conn, $sql);
	
	$message = $result ? "Group created!" : "Unable to create group! because this code already existing ";
	
} else if(isset($_POST['join_grp']))
{	
	$cnt = $_SESSION["contact_no"];
	$groupcode = $_POST['group'];	
	
	$sql1 = "SELECT gp_id FROM group_create WHERE group_code='$groupcode'";
	$result = $conn->query($sql1);
	
	if($result->num_rows > 0)
	{
		$row = mysqli_fetch_array($result);
		$gp_id = $row['gp_id'];
		
		$sql="INSERT INTO group_member(gp_id, Contact_No) VALUES($gp_id, '$cnt')";
	
		$result = $conn->query($sql);
		$message1 = $result ? "You success fully Joined the Group!" : "Unable to join group!";
		
		if($result->num_rows > 0)
		{	
			$row = mysqli_fetch_array($result);		
		}
		
	} else {
		// group not found
	}
		
} else if(isset($_POST['delete']))
{	
	$cnt = $_SESSION["contact_no"];
	$groupcode = $_POST['cdelete'];
	
	$sql1 = "SELECT gp_id FROM group_create WHERE group_code='$groupcode'";
	$result = $conn->query($sql1);
	
	if($result->num_rows > 0)
	{
		$row = mysqli_fetch_array($result);
		$gp_id = $row['gp_id'];

		$sql = "DELETE FROM group_member WHERE gp_id = $gp_id and Contact_No = '$cnt'";
		$result = $conn->query($sql);
		$message2 = $result ? "You success Exit from the Group!" : "Unable to exit group!";
		
		if($result->num_rows > 0)
		{	
			$row = mysqli_fetch_array($result);		
		}
		
	} else {
		$message2 = "grp not found";
	}
	
	
	$result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <style>
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
 <div class="row"><nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"><div class="col-md-11">
  <a class="navbar-brand" href="youraccount.php">Personal Expense Manager</a></div>
<div class="col-md-1">  <a href="logout.php?logout"><input type="button" value="Logout" class="btn btn-dark" style="border:2px solid grey;">	</a></div>
</nav></div>
<div class="container" style="margin-top:80px;">
	
	<div class="row">
	
	<div class="col-md-5"> 
	
		<div class="card">
			<div class="card-header">
				<span class="card-title">Join group</span>
			</div>
			
			<div class="card-body">
				<form method="POST">
					<label>Enter your group code : </label>
					<input class="form-control" type="text" name="group" placeholder="Enter group code" required> 
					
					<?PHP
						if(isset($message1)) {
							echo '<br>';
							echo $message1;	
							echo '<br>';							
						}
					?>
					<br>
					<input class="btn btn-primary" type="submit" name="join_grp" value="Join Group">
				</form>
			</div>		
		</div>
	</div>

		<div class="col-md-2"></div>
    <div class="col-md-5">
		
		<div class="card">
			<div class="card-header">
				<span class="card-title">Create new group</span>
			</div>
			
			<div class="card-body">
				<form method="POST">
					<label>Group code : </label>
					<input class="form-control" type="text" name="cgroup" placeholder="Enter group code" required> 					
					<?PHP
						if(isset($message)) {
							echo '<br>';
							echo $message;	
							echo '<br>';							
						}
					?>
					
					<br>
					<input class="btn btn-primary" type="submit" name="create" value="Create">
				</form>
			</div>
			
		</div>
			
    </div>
</div>
<div class="row">
	    <div class="col-md-5">
		<div class="card">
			<div class="card-header">
				<span class="card-title">Exit from group</span>
			</div>
			
			<div class="card-body">
				<form method="POST">
					<label>Enter your Group code : </label>
					<input class="form-control" type="text" name="cdelete" placeholder="Enter group code" required> 					
					<?PHP
						if(isset($message2)) {
							echo '<br>';
							echo $message2;	
							echo '<br>';							
						}
					?>
					
					<br>
					<input class="btn btn-primary" type="submit" name="delete" value="Exit">
				</form>
			</div>			
		</div>
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