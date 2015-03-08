<div class="container">
	<div class="row-fluid header">
		<h2>Questionnaire</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<form class="form-horizontal" action="/submit_questionnaire/<?php echo $gid; ?>" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label">What did you do today for this goal?</label>
				<div class="controls">
					<textarea cols="50" rows="5" name="work_summary"></textarea><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">How much time did you spend on it?</label>
				<div class="controls">
					<input type="text" name="time_spent"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Do you think that time and effort is enough?</label>
				<div class="controls">
					<input type="text" name="gauge_effort"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Do you think you need to modify the goal?</label>
				<div class="controls">
					<input type="text" name="goal_change"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Do you need to modify your approach?</label>
				<div class="controls">
					<input type="text" name="approach_change"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Why is this goal important to you?</label>
				<div class="controls">
					<input type="text" name="purpose_reminder"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">Approximately how much time will you spend tomorrow?</label>
				<div class="controls">
					<input type="text" aria-label="" name="time_next_day"><br>
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