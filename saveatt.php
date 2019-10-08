<?php
	include("dbconfig.php");
	$att=$_POST['att'];
	$sid=$_POST['sid'];
	
	$sql="update dashboard set attendance='$att'
							 where sid='$sid'
							 ";
	$sts=mysqli_query($conn,$sql);
	if($sts==true)
	{
		header("Location:att.php");
	}
	else
	{
		mysqli_error();	
	}
?>