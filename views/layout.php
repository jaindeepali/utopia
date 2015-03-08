<?php 
global $loggedInUser;
?>
<!doctype html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?=$title?></title>

		<link rel="stylesheet" type="text/css" href="/public/bootstrap/docs/assets/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/public/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/public/stylesheets/hint.min.css">
		<link rel="stylesheet" type="text/css" href="/public/stylesheets/style.css"> 
		<link rel="icon" href="/public/images/logo_small.png" type="image/ico">
		<script>window.jQuery||document.write('<script src="/public/scripts/jquery-1.9.1.min.js"><\/script>')</script>
		<script type="text/javascript" src="/public/js/modernizr.custom.79639.js"></script> 
	</head>
	<body>
		<div class="container-fluid">
			<div class="row-fluid topbar">
				<a href="/"><img src="/public/images/logo.png" class="logo-img">
				<span class = 'app-name'>Utopia</span></a>
				<span class = 'login-btn'>
					<?php
					if(!$loggedInUser):
					?>
					<a href = "/login"><button class="btn" style="height: 40px;">SignIn/SignUp</button></a>
					<?php else: ?>
					<a href = "/logout"><button class="btn" style="height: 40px;">Logout</button></a>
					<?php endif; ?>
				</span>
			</div>
			<div class="row-fluid main-container">
				<div class="span1">
					<ul class="nav">
						<li><div class="wrapper-dropdown-2"><a href="/"><i class="fa fa-home fa-lg"></i></a></div></li>
						<li><div class="wrapper-dropdown-2"><a href="/myprofile"><i class="fa fa-user fa-lg"></i></a></div></li>
						<li><div class="wrapper-dropdown-2"><a href="/goals"><i class="fa fa-trophy fa-lg"></i></a></div></li>
						<li><div class="wrapper-dropdown-2"><a href="/list"><i class="fa fa-list fa-lg"></i></a></div></li>
						<li><div class="wrapper-dropdown-2"><a href="/graph"><i class="fa fa-bar-chart-o fa-lg"></i></a></div></li>
						<li><div class="wrapper-dropdown-2"><a href="/motivation">&nbsp; <i class="fa fa-lightbulb-o fa-lg"></i></a></div></li>
					</ul>
				</div>
				<div class="span11">
					<?php echo $content; ?>
				</div>
			</div>
			<a href="#" class="go-top"><i class="fa fa-angle-up fa-3x"></i></a>
		</div>
		<script type="text/javascript" src="/public/scripts/main.js"></script>
		<script type="text/javascript" src="/public/scripts/jquery.masonry.min.js"></script>
		<script type="text/javascript" src="/public/scripts/Chart.js"></script>
	</body>
</html>
