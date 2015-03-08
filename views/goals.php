<div class="container">
	<div class="row-fluid header">
		<h2>My Goals</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<table class="table table-hover">
			<tr>
				<th><i class="fa fa-trophy fa-2x"></i></th>
				<th><i class="fa fa-calendar fa-2x"></i></th>
			</tr>
			<?php
			foreach($data as $value):
			?>
			<tr>
				<td><a href = "/goal/<?php echo $value['gid']; ?>"><?php echo $value['description']; ?></a></td>
				<td><?php echo date("d/m/Y",$value['deadline']); ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
		<center><a href="/new_goal"><button class="btn"style="height: 40px;"><i class="fa fa-plus"></i> &nbsp;Add</button></a></center>
	</div>
</div>