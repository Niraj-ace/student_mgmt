<?php
	include("dbconfig.php");
	$sid=$_REQUEST['sid'];
	$sql="delete from dashboard where sid='$sid'";
	$res=mysqli_query($conn,$sql);
	if($res==true)
	{
		header('Location:home.php');
	}
	else
	{
		mysqli_error();
	}
?>