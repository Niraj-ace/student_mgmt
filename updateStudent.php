<?php
	include("dbconfig.php");
	$name=$_POST['n'];
	$roll=$_POST['r'];
	$class=$_POST['class'];
	$sub=$_POST['sub'];
	$sid=$_POST['sid'];
	
	$sql="update dashboard set name='$name',
							 roll='$roll',
							 class='$class',
							 subject='$sub'
							 where sid='$sid'
							 ";
	$sts=mysqli_query($conn,$sql);
	if($sts==true)
	{
		header("Location:index.php");
	}
	else
	{
		mysqli_error();	
	}
?>