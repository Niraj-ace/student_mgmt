<?php
	include("header.php");
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<table class="table table-bordered">
				<h3 class="text-center">Attendance Register</h3>
					<thead>
						<tr>
							<th>Roll no.</th>
							<th>Name</th>
							<th>Status</th>
							<th>Attendance</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include("dbconfig.php");
							$sql="select * from dashboard order by roll";
							
							
							$res=mysqli_query($conn,$sql);
							
							
							while($row=mysqli_fetch_object($res))
							{
								echo"<tr>";
									echo"<td>$row->roll</td>";
									echo"<td>$row->name</td>";
									echo"<td>$row->attendance</td>";
									echo"<td><a href='attstatus.php?sid=$row->sid'>Attendance</td>";
								echo"</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
