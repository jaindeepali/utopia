<?php
	global $loggedInUser;
	if(!$loggedInUser):
?>
<div class="container">
	<div class="row-fluid header">
		<h2>SignIn/SignUp</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<form class="form-horizontal" action="/lib/login_control.php" method="post" enctype="multipart/form-data">
			<div class="control-group">
				<label class="control-label" for="email">Email:</label>
				<div class="controls">
					<input type="text" name="email" required="required"><br>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="pass">Password:</label>
				<div class="controls">
					<input type="password" name="pass" required="required"><br>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input class="btn" type="submit" value="SignIn/SignUp" style="height: 40px;">
				</div>
			</div>
		</form>
	</div>
</div>
<?php
	endif;
?>