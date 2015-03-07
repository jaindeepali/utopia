<div class="container">
	<div class="row-fluid header">
		<h2><?php echo $data['description']; ?></h2>
		<span class="subtitle">Deadline:</span> <?php echo date("d/m/Y", $data['deadline']); ?>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<h4>To-Do List:</h4>
		<table class="table table-hover">
			<tr>
				<td>Task</td>
				<td>Date</td>
				<td>Done?</td>
			</tr>
		</table>
		<a href="/list/<?php echo $data['gid'];?>"><button class="btn" style="height:40px">Make to-do list for tomorrow</button></a>
		<a href="/questionnaire/<?php echo $data['gid'];?>"><button class="btn" style="height:40px">Fill today's questionnaire</button></a><br>
	</div>
</div>