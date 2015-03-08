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
			$user['occupation'] = mysql_escape_string($_POST['occupation']);
			$user['interests'] = mysql_escape_string($_POST['interests']);
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

		public function view_goal($gid)
		{
			global $loggedInUser;
			if(!$loggedInUser){
				header('Location:/login');
			}
			else{
				$ob = new model();
				$data = $ob->get_goal($gid);
				$tasks = $ob->get_tasks_by_gid($gid);
				set('data',$data);
				set('tasks',$tasks);
				return render('goal.php');
			}
		}

		public function task_list()
		{
			global $loggedInUser;
			if(!$loggedInUser){
				header('Location:/login');
			}
			else{
				$ob = new model();
				$tasks = $ob->get_tasks_by_uid($loggedInUser);
				set('tasks',$tasks);
				return render('list.php');
			}
		}

		public function new_goal()
		{
			return render('add_goal.php');
		}

		public function add_goal()
		{
			$goal = array();
			$goal['description'] = mysql_escape_string($_POST['description']);
			$goal['deadline'] = mysql_escape_string(strtotime($_POST['date'].'-'.$_POST['month'].'-'.$_POST['year']));
			$ob = new model();
			$ob->add_goal($goal);	
		}

		public function add_task($gid)
		{
			var_dump($_POST);
			$goal = array();
			$goal['description'] = mysql_escape_string($_POST['description']);
			$goal['date'] = mysql_escape_string(strtotime($_POST['date'].'-'.$_POST['month'].'-'.$_POST['year']));
			$ob = new model();
			$ob->add_task($goal,$gid);
		}

		public function validate_user()
		{
			$email = mysql_escape_string($_POST['email']);
			$pass = mysql_escape_string($_POST['pass']);
			$ob = new model();
			$ob->validate($email,$pass);
		}

		public function questionnaire($gid)
		{
			set('gid',$gid);
			return render('questionnaire.php');
		}

		public function submit_questionnaire($gid)
		{
			$ob = new model();
			$ob->add_ques($gid, $_POST);
		}

		public function graph()
		{
			global $loggedInUser;
			if(!$loggedInUser){
				header('Location:/login');
			}
			else{
				return render('graph.php');
			}
		}

		public function motivation()
		{
			return render('motivation.php');
		}

		public function story($sid)
		{
			return render('story'.$sid.'.php');
		}

		public function post_story()
		{
			return render('post_story.php');	
		}

		public function mystories()
		{
			return render('mystories.php');
		}

		public function insights()
		{
			return render('insights.php');
		}

		public function recommendations()
		{
			return render('recommendations.php');
		}

		public function about()
		{
			return render('about.php');
		}

		public function contact()
		{
			return render('contact.php');
		}
	}
?>