<?php 
$conn = mysqli_connect("localhost", "root", "", "em_db");
if(!$conn)
{
	die("connection failed" . mysqli_connect_error());
}
?>