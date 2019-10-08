<?php
	include("header.php");
?>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
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
				
				<form action="saveatt.php" method="POST" class="form-horizontal">
					<h3 class="text-center"><?php echo $row->name;?></h3>
					<div class="row form-group">
						<label>Attendance</label>
						<div class="form-control">
							<input type="radio" name='att' value="present" <?php if($row->attendance=='present') echo 'checked';?>> Present
							<input type="radio" name='att' value="absent" <?php if($row->attendance=='absent') echo 'checked';?>> Absent
						</div>
					</div>
					<div class="form-group hidden">
						<label>ID</label>
						<input type="text" class="form-control" name="sid" value="<?php echo $row->sid;?>" readonly >
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</form>
					</div>
					<div class="col-sm-4"></div>
				</div>
				
<?php
	include("footer.php");
?>