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
							<th>Class</th>
							<th>Attendance</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							include("dbconfig.php");
							$sub=$_POST['sub'];
							$sql="select * from dashboard where subject='$sub'";
							
							
							$res=mysqli_query($conn,$sql);
							
							echo "<h2 class='text-center'>$sub</h2>";
							while($row=mysqli_fetch_object($res))
								
							{
								echo"<tr>";
									echo"<td>$row->roll</td>";
									echo"<td>$row->name</td>";
									echo"<td>$row->class</td>";
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
				