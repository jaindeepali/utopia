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
				$ob = new model();
				$data = $ob->get_user($loggedInUser);
				set('data',$data);
				return render('view_profile.php');
			}
		}

		public function edit_profile()
		{
			global $loggedInUser;
			if(!$loggedInUser){
				header('Location:/login');
			}
			else{
				$ob = new model();
				$data = $ob->get_user($loggedInUser);
				set('data',$data);
				return render('edit_profile.php');
			}
		}

		public function update_user()
		{
			global $loggedInUser;
			$user = array();
			$user['email'] = mysql_escape_string($_POST['email']);
			$user['name'] = mysql_escape_string($_POST['name']);
			$ob = new model();
			$ob->update_user($loggedInUser, $user);
		}

		public function view_goals()
		{
			global $loggedInUser;
			if(!$loggedInUser){
				header('Location:/login');
			}
			else{
				$ob = new model();
				$data = $ob->get_goals($loggedInUser);
				set('data',$data);
				return render('goals.php');
			}
		}

		public function validate_user()
		{
			$email = mysql_escape_string($_POST['email']);
			$pass = mysql_escape_string($_POST['pass']);
			$ob = new model();
			$ob->validate($email,$pass);
		}

	}
?>