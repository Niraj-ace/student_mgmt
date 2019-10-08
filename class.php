<?php
	include("header.php");
?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<form action="saveclass.php" method="POST">
		<div class="row form-group">
			<div class="col-sm-3"><label>Choose Class</label></div>
			<div class="col-sm-9">
			<select class="form-control" name="class">
				<option value="morning">morning</option>
				<option value="afternoon">afternoon</option>
				<option value="evening">evening</option>
			</select>
			</div>
		</div>
		<div class="row form-group text-center">
			<button type="submit" class="btn btn-primary">View</button>
		</div>
		</form>
		</div>
		<div class="col-sm-3"></div>
	</div>
	
					
					

<?php
	include("footer.php");
?>