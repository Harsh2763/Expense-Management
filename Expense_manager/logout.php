<?php
if(array_key_exists('logout',$_GET))
{
	session_start();

	unset($_SESSION["contact_no"]);
	session_destroy();
	header("Location:index.php");
}
?>