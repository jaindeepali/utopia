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
				<th>Task</th>
				<th>Date</th>
				<th>Done?</th>
			</tr>
			<?php foreach($tasks as $task): ?>
			<tr>
				<td><?php echo $task['description']; ?></td>
				<td><?php echo date("d/m/Y",$task['date']); ?></td>
				<td><i class="fa fa-square-o"></i></td>
			</tr>
			<?php endforeach; ?>
			<tr id="new_task"></tr>
			<tr>
				<td><input class="long-input" type="text" id="new_task_desc"></td>
				<td><input class="short-input" type="text" id="date">/
					<input class="short-input" type="text" id="month">/
					<input class="short-input" type="text" id="year"></td>
				<td><button id = "add_task" class="btn" style="height:40px" data-id="<?php echo $data['gid'];?>">Add Task</button></td>
			</tr>
		</table>
		<a href="/questionnaire/<?php echo $data['gid'];?>"><button class="btn" style="height:40px">Fill today's questionnaire</button></a><br>
	</div>
</div>