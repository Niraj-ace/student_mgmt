<?php
	include("header.php");
?>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		<form action="savesub.php" method="POST">
		<div class="row form-group">
			<div class="col-sm-3"><label>Choose Subject</label></div>
			<div class="col-sm-9">
			<select class="form-control" name="sub">
				<option value="Web Development">Web Development</option>
				<option value="Hacking">Hacking</option>
				<option value="Python">Python</option>
				<option value="Java">Java</option>
				<option value="PHP">PHP</option>
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