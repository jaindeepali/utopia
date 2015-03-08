<div class="container">
	<div class="row-fluid header">
		<h2>Edit my Profile</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<form class="form-horizontal" action="/update_user" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="name">Name:</label>
				<div class="controls">
					<input type="text" name="name" required="required" value="<?php echo $data['name']; ?>"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email:</label>
				<div class="controls">
					<input type="text" name="email" required="required" value="<?php echo $data['email']; ?>"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="occupation">Occupation:</label>
				<div class="controls">
					<input type="text" name="occupation" required="required" value="<?php echo $data['occupation']; ?>"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="interests">Interests (comma separated):</label>
				<div class="controls">
					<input type="text" name="interests" required="required" value="<?php echo $data['interests']; ?>"><br>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input class="btn" type="submit" value="Update" style="height: 40px;">
				</div>
			</div>
		</form>
	</div>
</div>