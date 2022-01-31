<?php
session_start();

require_once './connection.php' ;
	
if(isset($_POST['insert'])){
	
	$total = $_POST['total'];
	
	$username = $_SESSION["contact_no"];
	$date = date("d-M-Y");

	$sql = "INSERT INTO expense_table (e_type, total, Contact_No, date_ex) VALUES('Vehicle', $total, $username, '$date')";
	$conn->query($sql);
	
	header("Location: youraccount.php");
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
  <title>Vehicle</title>
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
<form action="vehicle.php" method="post" name="myForm" id="myForm1">
 <div class="row"><nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"><div class="col-md-11">
  <a class="navbar-brand" href="youraccount.php">Personal Expense Manager</a></div>
<div class="col-md-1">  <a href="logout.php?logout"><input type="button" value="Logout" class="btn btn-dark" style="border:2px solid grey;">	</a></div>
</nav></div>
<div class="container" style="margin-top:80px">

<div class="row">
	<div class="col-md-6">
		<table class="table table-striped">
			<thead>
				<tr>
					<th colspan="2" class="bg-dark" style="color: white"><center>Selected Type : Vehicle</center></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "aircraft" type = "checkbox" class="form-check-input">Aircraft		
							</label>
						</div>
					</td>
					<td><input type="number" name="aircraftvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "ambulance" type = "checkbox" class="form-check-input">Ambulance	
							</label>
						</div>
					</td>
					<td><input type="number" name="ambulancevalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "autocycle" type = "checkbox" class="form-check-input">Autocycle	
							</label>
						</div>
					</td>
					<td><input type="number" name="autocyclevalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name = "car" type = "checkbox" class="form-check-input">Car	
							</label>
						</div>
					</td>
					<td><input type="number" name="carvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name="water" type="checkbox" class="form-check-input">Water Craft
							</label>
						</div>
					</td>
					<td><input type="number" name="watervalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name="space" type="checkbox" class="form-check-input">Space Craft
							</label>
						</div>
					</td>
					<td><input type="number" name="spacevalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name="motor" type="checkbox" class="form-check-input">Motor Vehicles
							</label>
						</div>
					</td>
					<td><input type="number" name="motorvalue">Rs.</td>
				</tr>
				<tr>
					<td>
						<div class="form-check">
							<label class="form-check-label">
								<input name="others" type="checkbox" class="form-check-input">Others
							</label>
						</div>
					</td>
					<td><input type="number" name="othersvalue">Rs.</td>
				</tr>
				<tr>
					<td colspan="2">
						    <a href="selectexpense.php"><input type="button" value="Back" class="btn btn-secondary"></a>
							<form method="post">
								<input type="hidden" id="total" name="total">								
								<input class="btn btn-secondary" type="submit" name="insert" value="Add In Expense" onClick="press()">
							</form>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
    <div class="col-md-6">
				<img src="Vehicle.jpg" width="600" height="500px">
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
</form>
<script type="text/javascript">
function press(){ 
	var n1=0,n2=0,n3=0,n4=0,n5=0,n6=0,n7=0,n8=0;
	if(document.myForm.aircraft.checked)
	{
		var a=document.myForm.aircraftvalue.value;
		n1=parseInt(a);
	}
	if(document.myForm.ambulance.checked)
	{
			var b=document.myForm.ambulancevalue.value;
			n2=parseInt(b);
	}
	if(document.myForm.autocycle.checked)
	{
			var c=document.myForm.autocyclevalue.value;
			n3=parseInt(c);
	}
	if(document.myForm.car.checked)
	{
			var d=document.myForm.carvalue.value;
			n4=parseInt(d);
	}
	if(document.myForm.water.checked)
	{
			var e=document.myForm.watervalue.value;
			n5=parseInt(e);
	}
	if(document.myForm.space.checked)
	{
			var f=document.myForm.spacevalue.value;
			n6=parseInt(f);
	}
	if(document.myForm.motor.checked)
	{
			var g=document.myForm.motorvalue.value;
			n7=parseInt(g);
	}
	if(document.myForm.others.checked)
	{
			var h=document.myForm.othersvalue.value;
			n8=parseInt(h);
	}
		var sum=n1+n2+n3+n4+n5+n6+n7+n8;
		document.getElementById("total").value=sum;
	}
</script>
</body>
</html>