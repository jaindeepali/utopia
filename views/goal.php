<div class="container">
	<div class="row-fluid header">
		<h2>My Profile</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<table class="table table-hover">
			<tr>
				<td style="text-align:right">Name:</td>
				<td style="text-align:left"><?php echo $data['description']; ?></td>
			</tr>
			<tr>
				<td style="text-align:right">Email:</td>
				<td style="text-align:left"><?php echo $data['deadline']; ?></td>
			</tr>
		</table>
	</div>
</div>