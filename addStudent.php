<?php
	include("dbconfig.php");
	$name=$_POST['n'];
	$roll=$_POST['r'];
	$class=$_POST['class'];
	$sub=$_POST['sub'];
	
	$sql="insert into dashboard(roll,name,class,subject)
	values('$roll','$name','$class','$sub')";
	$sts=mysqli_query($conn,$sql);
	if($sts==true)
	{
		header ("Location:index.php");
	}
	else
	{
		mysqli_error();	
	}
?>