<?php

	/*Main controller file*/
	class controller{

		//Function to render home.php
		public function home()
		{
			return render('home.php');
		}

		public function login()
		{
			return render('login.php');
		}

		public function view_profile()
		{
			return render('view_profile.php');
		}

		public function edit_profile()
		{

		}

		public function logout()
		{
			session_unset();
			session_destroy();
			header('Location:/');
		}
	}
?>