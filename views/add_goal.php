<div class="container">
	<div class="row-fluid header">
		<h2>Add New Goal</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<form class="form-horizontal" action="/add_goal" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="description">Description:</label>
				<div class="controls">
					<input class="long-input" type="text" name="description" required="required"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="deadline">Deadline:</label>
				<div class="controls">
					<input class="short-input" type="text" name="date" required="required">/
					<input class="short-input" type="text" name="month" required="required">/
					<input class="short-input" type="text" name="year" required="required"><br>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input class="btn" type="submit" value="Add" style="height: 40px;">
				</div>
			</div>
		</form>
	</div>
</div>