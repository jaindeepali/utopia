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
			global $loggedInUser;
			if(!$loggedInUser){
				return render('login.php');
			}
			else{
				set('msg','You are already signed in.');
				return render('error.php');
			}
		}

		public function view_profile()
		{
			global $loggedInUser;
			if(!$loggedInUser){
				header('Location:/login');
			}
			else{
				return render('view_profile.php');
			}
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