<?php
session_start();

require_once './connection.php' ;
$username = $_SESSION["contact_no"];
if(isset($_POST['start_date']) && isset($_POST['end_date']) ) {
	// $start_date = convert(varchar, $_POST['start_date'], 6);
	$start_date = date("d-M-Y", strtotime($_POST['start_date']));

	// $end_date = convert(varchar, $_POST['end_date'], 6);
	$end_date = date("d-M-Y", strtotime($_POST['end_date']));
} else {
	header('Location : youraccount.php');
}	
	$sql = "SELECT * FROM expense_table WHERE contact_no=".$username." AND date_ex BETWEEN '".$start_date."' AND '".$end_date."' ";
	
	$result = $conn->query($sql);

	print_r($result);
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
	 .expensedetails{
		 height: auto;
	 }
	</style>
  <title>Your account</title>
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
 <div class="row"><nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top"><div class="col-md-9">
  <a class="navbar-brand" href="youraccount.php">Personal Expense Manager</a></div>
 <div class="col-md-2">  <a href="group.php"><input type="button" value="Group Create/Join" class="btn btn-dark" style="border:2px solid grey;">	</a></div>

<div class="col-md-1">  <a href="logout.php?logout"><input type="button" value="Logout" class="btn btn-dark" style="border:2px solid grey;">	</a></div>
</nav></div>

<div class="container" style="margin-top:40px;">
<div class="expensedetails">
<div class="row bg-dark" style="color: white; height: 60px">
	  	<div class="col-md-12" style="padding-top: 15px">
		<h4 style="float:left;"><b>Welcome
	<?php
		require_once './connection.php';
		$uname = $_SESSION["name"];
		echo $uname;
	?>
</b></h4><h5 style="float:right;">Showing Result From <?=$start_date?> To <?=$end_date?></h5></br>
	 	<hr style="background-color: white">
 	</div>
		

</div>



 <div class="row bg-dark" style="color: white; height: 60px;">
 	<div class="col-md-4" style="padding-top: 15px">
		<h4><b>Date</b></h4>
 	</div>
 	 <div class="col-md-4" style="padding-top: 15px">
		 <h4><b>Expense Type</b></h4>
 	</div>
 	 <div class="col-md-4" style="padding-top: 15px">
 		<h4><b>Money &#x20B9;</b></h4>
 	</div>
  </div><hr>
   <div class="row">
	<?php 
	$sum = 0;
		if($result->num_rows > 0)
		{
			
			while($row = $result->fetch_assoc()) {		
	?>
 	<div class="col-md-4" style="padding: 10px">
 	<?php 
		echo $row["date_ex"]; 
	?>
 	</div>
 	 <div class="col-md-4" style="padding: 10px">
 	<?php
			echo $row["e_type"]; 
	?>
 	</div>
 	<div class="col-md-4" style="padding: 10px">
 	<?php 
			 echo $row["total"]; 	
			 $sum = $sum + $row["total"];
		?>	
 	</div>
 		<?php 
			}
			}
		?>
  </div>
   
  </div>
  <div class="row">
	<div class="offset-md-4 col-md-4"  style="padding: 10px">
			<strong><span>Total :- </span></strong>
	</div> 
	<div class="col-md-4" style="padding: 10px">
	<strong>
 	<?php 
			 echo $sum; 	
			 
		?>	
 	</div>
	 </strong>
  </div>
   
  </div>
 <div class="row">
	<div class="col-md-10">

	</div>
 <div class="col-md-2">
 	<a href="selectexpense.php"><input type="button" value="Add Expenses" class="btn btn-secondary"></a>
 </div>
</div>
<!-- 
<div class="row">
	    <div class="col-md-5">
		<div class="card">
			<div class="card-header">
				<span class="card-title">See Your Group Details</span>
			</div>
						
		</div>
    </div>
</div> -->

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