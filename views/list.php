<div class="container">
	<div class="row-fluid header">
		<h2>To-do List</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<table class="table table-hover">
			<tr>
				<th>Goal</th>
				<th>Task</th>
				<th>Date</th>
				<th>Done?</th>
			</tr>
			<?php foreach($tasks as $task): ?>
			<tr>
				<td><?php echo $task['gdesc']; ?></td>
				<td><?php echo $task['tdesc']; ?></td>
				<td><?php echo date("d/m/Y",$task['date']); ?></td>
				<td><i class="fa fa-square-o"></i></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>