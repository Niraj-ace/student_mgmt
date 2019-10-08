<?php
	include("header.php");
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-bordered">
				<h3 class="text-center">Summary</h3>
					<thead>
						<tr>
							<th>Roll no.</th>
							<th>Name</th>
							<th>Class</th>
							<th>Subject</th>
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
									echo"<td>$row->class</td>";
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