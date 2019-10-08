<?php
	include("header.php");
?>
<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
			<h3 class="text-center">Student Details</h3>
				
			<?php
							include("dbconfig.php");
							$sid=$_REQUEST['sid'];
							$sql="select * from dashboard where sid='$sid'";
							
							
							$res=mysqli_query($conn,$sql);
							
							
							$row=mysqli_fetch_object($res);
							{
								
									echo"<div class='form-group'>
											<label>Roll</label>
											<input type=text' class='form-control' value='$row->roll' readonly>
										</div>";
									echo"<div class='form-group'>
											<label>Name</label>
											<input type=text' class='form-control' value='$row->name' readonly>
										</div>";
									echo"<div class='form-group'>
											<label>Class</label>
											<input type=text' class='form-control' value='$row->class' readonly>
										</div>";
									echo"<div class='form-group'>
											<label>Subject</label>
											<input type=text' class='form-control' value='$row->subject' readonly>
										</div>";
									
							
							}
						?>
		</div>
		<div class="col-sm-3"></div>
	</div>

<?php
	include("footer.php");
?>
