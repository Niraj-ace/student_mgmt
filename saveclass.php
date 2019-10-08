<?php
	include("header.php");
?>

	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Roll no.</th>
							<th>Name</th>
							<th>Subject</th>
							<th>Attendance</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							include("dbconfig.php");
							$class=$_POST['class'];
							$sql="select * from dashboard where class='$class'";
							
							
							$res=mysqli_query($conn,$sql);
							
							echo "<h2 class='text-center'>$class</h2>";
							while($row=mysqli_fetch_object($res))
								
							{
								echo"<tr>";
									echo"<td>$row->roll</td>";
									echo"<td>$row->name</td>";
									echo"<td>$row->subject</td>";
									echo"<td>$row->attendance</td>";
								echo"</tr>";
							}
						?>
						</tbody>
				</table>
			</div>
		</div>
	</div>
<?php
	include("footer.php");
?>
				