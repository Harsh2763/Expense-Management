<!DOCTYPE html>
<html lang="en">
<head>
 <style>

	select{
		width: 150px;
		height: 25px;
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
	#expensetypes{
		color: red;
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
<form action="" name="myForm" id="myForm1">
 <div class="row"><nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"><div class="col-md-11">
  <a class="navbar-brand" href="youraccount.php">Personal Expense Manager</a></div>
<div class="col-md-1">  <a href="logout.php?logout"><input type="button" value="Logout" class="btn btn-dark" style="border:2px solid grey;">	</a></div>
</nav></div>
<div class="container" style="margin-top:80px;">
	
	<div class="row">
	<div class="col-md-6" style=" border: 1px solid grey; border-radius: 2%;"> 
		<table class="table">
			<thead>
				<tr>
					<th colspan="2" class="bg-dark" style="color: white">
					<center>Select Expences</center></th>
				</tr>
			</thead>
			<tbody>
			<tr height="200px">
				<td  >
					<div class="form-group"><br>
						<label for="usr">Please select expense type:</label>
					</div>
				</td>
				<td><br>
					<select name="expensetype" onBlur="msg()">
						<option value="">Select</option>
						<option value="grocery.php">Grocery</option>
						<option value="vehicle.php">Vehicle</option>
						<option value="food.php">Food</option>
						<option value="entertainment.php">Entertainment</option>
						<option value="miscellaneous.php">Miscellaneous</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><center><input name="enter" type="button" value="Next" onclick="expense()" class="btn btn-secondary" ></center></td>
			</tr>
			<tr>
				<th colspan="2"><p id="expensetypes"></p></th>
			</tr>
			</tbody>
		</table>
	</div>
    <div class="col-md-6">
				<img src="personal expenses.jpg" width="600" height="500px">
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
	function msg()
	{
		if(myForm.expensetype.selectedIndex==0)
 		{
			document.getElementById("expensetypes").innerHTML="Kindly select expense type";
  			myForm.expensetype.focus();
  			return false;
 		}
		else
 		{
	 		document.getElementById("expensetypes").innerHTML="";
 		}
	}
	function expense()
	{ 
		 if(myForm.expensetype.selectedIndex==0)
		 {
			 document.getElementById("expensetypes").innerHTML="Kindly select expense type";
		  	 myForm.expensetype.focus();
			 return false;
		 }
		else
 		{
	 		document.getElementById("expensetypes").innerHTML="";
  			var q=document.myForm.expensetype;
			var c=q.options[q.selectedIndex].value;
			window.location = c;
			//window.location = "/Personal Expense Manager/" + c;
 		}
		document.myForm.result.value=c;
		return true;
	}
	</script>
</body>
</html>