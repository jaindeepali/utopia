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

		public function logout()
		{
			session_unset();
			session_destroy();
			header('Location:/');
		}

		public function view_profile()
		{
			global $loggedInUser;
			if(!$loggedInUser){
				header('Location:/login');
			}
			else{
				set('email','djdeepalijain811@gmail.com');
				set('name','Deepali Jain');
				return render('view_profile.php');
			}
		}

		public function edit_profile()
		{

		}

		public function view_goals()
		{

		}

		public function validate_user()
		{
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$ob = new model();
			$ob->validate($email,$pass);
		}

	}
?>