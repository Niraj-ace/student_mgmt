<?php
	include("header.php");
?>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<h3>Please Update the Student Details...</h3>
				
				<?php
					include("dbconfig.php");//establish the connection
					//fetching the id which is passed in url
					$sid=$_REQUEST['sid'];
					
					//write query string to fetch record whose id equal to $contid
					$sql="select * from dashboard where sid='$sid'";
					
					//execute the query
					$res=mysqli_query($conn,$sql);
					
					//convert the result into object
					$row=mysqli_fetch_object($res);
				?>
				
				<form action="updateStudent.php" method="POST" class="form-horizontal">
					<div class="form-group">
						<label>Roll</label>
						<input type="text" class="form-control" placeholder="Enter Roll"
						name="r" value="<?php echo $row->roll;?>">
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" placeholder="Enter Name"
						name="n" value="<?php echo $row->name;?>">
					</div>
					<div class="form-group">
						<label>Class</label>
							<select class="form-control" name="class">
								<option value="morning" <?php if($row->class=="morning")	echo "selected";?>>morning</option>
								<option value="afternoon" <?php if($row->class=="afternoon")	echo "selected";?>>afternoon</option>
								<option value="evening" <?php if($row->class=="evening")	echo "selected";?>>evening</option>
							</select>
					</div>
					<div class="row form-group">
						<label>Subject</label>
						<div class="form-control">
							<input type="radio" name='sub' value="Web Development" <?php if($row->subject=='Web Development') 		echo 'checked';?>>Web Development
							<input type="radio" name='sub' value="Hacking" <?php if($row->subject=='Hacking') 		echo 'checked';?>>Hacking
							<input type="radio" name='sub' value="Python" <?php if($row->subject=='Python') 		echo 'checked';?>>Python
							<input type="radio" name='sub' value="Java" <?php if($row->subject=='Java') 		echo 'checked';?>>Java
							<input type="radio" name='sub' value="PHP" <?php if($row->subject=='PHP')		 echo 'checked';?>>PHP
						</div>
					</div>
					<div class="form-group hidden">
						<label>ID</label>
						<input type="text" class="form-control" name="sid" value="<?php echo $row->sid;?>" readonly >
					</div>
					
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Update</button>
					</div>
				</form>
					</div>
					<div class="col-sm-4"></div>
				</div>
				
<?php
	include("footer.php");
?>