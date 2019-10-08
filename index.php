<?php
	include("header.php");
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<table class="table table-bordered">
				<h3 class="text-center">Student Record</h3>
					<thead>
						<tr>
							<th>Roll no.</th>
							<th>Name</th>
							<th colspan="3" class="text-center">Action</th>
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
									echo "<td><a href='deleteStudent.php?sid=$row->sid'>Delete</a></td>";
									echo "<td><a href='editStudent.php?sid=$row->sid'>Edit</a></td>";
									echo "<td><a href='viewStudent.php?sid=$row->sid'>view</a></td>";
								echo"</tr>";
							}
						?>
					</tbody>
				</table>
				<hr>
				<div class="text-center">
					<button class="btn btn-primary" data-toggle='modal' data-target='#mymodal'>Add</button>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
		
		<div class="modal fade" id="mymodal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href="#" data-dismiss="modal" class="close">&times;</a>
							<h4 class="text-center">Add Student</h4>
						</div>
						<div class="modal-body">
							<form action="addStudent.php" method="POST">
								<div class="row form-group">
									<div class="col-sm-3"><label>Roll no.</label></div>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="r">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-3"><label>Name</label></div>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="n">
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-3"><label>Class</label></div>
									<div class="col-sm-9">
										<select class="form-control" name="class">
											<option value="">Choose</option>
											<option value="morning">morning</option>
											<option value="afternoon">afternoon</option>
											<option value="evening">evening</option>
										</select>
									</div>
								</div>
								<div class="row form-group">
									<div class="col-sm-3"><label>Subject</label></div>
									<div class="col-sm-9">
										<input type="radio" name="sub" value="Web Development"> Web Development
										<input type="radio" name="sub" value="Hacking"> Hacking
										<input type="radio" name="sub" value="Python"> Python
										<input type="radio" name="sub" value="Java"> Java
										<input type="radio" name="sub" value="PHP"> PHP
									</div>
								</div>
								<div class="row text-center">
									<button type="submit" class="btn btn-primary" data-toggle='modal' data-target='#mymodal'>Add</button>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button class="btn btn-danger" data-dismiss="modal">close</button>
						</div>
					</div>
				</div>
			</div>
			
	</div>
<?php
	include("footer.php");
?>