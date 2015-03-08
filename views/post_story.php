<div class="container">
	<div class="row-fluid header">
		<h2>Post a story</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<form class="form-horizontal" action="/add_story" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label">Title:</label>
				<div class="controls">
					<input class="long-input" type="text" name="title"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Link:</label>
				<div class="controls">
					<input class="long-input" type="text" name="link"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Body:</label>
				<div class="controls">
					<textarea cols="50" rows="5" style="width:800px;" name="work_summary"></textarea><br>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input class="btn" type="submit" value="Submit" style="height: 40px;">
				</div>
			</div>
		</form>
	</div>
</div>