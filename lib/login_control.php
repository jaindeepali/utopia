<?php

	session_start();

	$email = $_POST['email'];
	$pass = $_POST['pass'];
	if($email == 'djdeepalijain811@gmail.com' && $pass == 'pass')
	{
		echo 'here';
		$_SESSION['email'] = $email;
		header('Location:/');
	}