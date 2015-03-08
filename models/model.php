<?php

	class model{

		public function validate($email, $pass){
			global $link;
			$sql = "SELECT * FROM user WHERE email = '$email'";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			if(mysqli_num_rows($result) == 0){
				$sql = "INSERT into user (email, pass) VALUES ('$email', '$pass')";
				$res = mysqli_query($link, $sql);
				if(!$res)
				{
					echo "Could not run query successfully.".mysqli_error($link);
				}
				else
				{
					$this->validate($email,$pass);
				}
			}
			else{
				while($row = mysqli_fetch_assoc($result))
				{
					if($email == $row['email'] && $pass == $row['pass'])
					{
						$_SESSION['uid'] = $row['uid'];
						header('Location:/edit_profile');
					}
				}
			}	
		}

		public function get_user($uid){
			global $link;
			$sql = "SELECT * FROM user WHERE uid = $uid";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else{
				$data = array();
				$i = 0;
				while($row = mysqli_fetch_assoc($result))
				{
					$data[$i] = $row;
					$i++;
				}
				return $data[0];
			}
		}

		public function update_user($uid, $user){
			global $link;
			$sql = "UPDATE user SET name = '".$user['name']."', email = '".$user['email']."', occupation = '".$user['occupation']."', interests = '".$user['interests']."' WHERE uid = $uid";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else
			{
				header('Location:/myprofile');
			}
		}

		public function get_goals($uid){
			global $link;
			$sql = "SELECT * FROM goal WHERE uid = $uid";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else{
				$data = array();
				$i = 0;
				while($row = mysqli_fetch_assoc($result))
				{
					$data[$i] = $row;
					$i++;
				}
				return $data;
			}
		}

		public function get_goal($gid){
			global $link;
			$sql = "SELECT * FROM goal WHERE gid = $gid";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else{
				$data = array();
				$i = 0;
				while($row = mysqli_fetch_assoc($result))
				{
					$data[$i] = $row;
					$i++;
				}
				return $data[0];
			}
		}

		public function get_tasks_by_gid($gid){
			global $link;
			$sql = "SELECT * FROM task WHERE gid = $gid";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else{
				$data = array();
				$i = 0;
				while($row = mysqli_fetch_assoc($result))
				{
					$data[$i] = $row;
					$i++;
				}
				return $data;
			}
		}

		public function get_tasks_by_uid($uid){
			global $link;
			$sql = "SELECT tid,goal.gid,date,task.description as tdesc,done,goal.description as gdesc FROM task, goal WHERE goal.gid = task.gid AND goal.uid = $uid ORDER BY task.date";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else{
				$data = array();
				$i = 0;
				while($row = mysqli_fetch_assoc($result))
				{
					$data[$i] = $row;
					$i++;
				}
				return $data;
			}
		}

		public function add_goal($goal){
			global $link;
			global $loggedInUser;
			$time = time();
			$sql = "INSERT INTO goal (description, deadline, uid, created_at) VALUES ('".$goal['description']."', ".$goal['deadline'].", $loggedInUser, $time)";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else{
				header("Location:/goals");
			}
		}

		public function add_task($task,$gid){
			global $link;
			$time = time();
			$sql = "INSERT INTO task (description, date, gid, created_at) VALUES ('".$task['description']."', ".$task['date'].", $gid, $time)";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else
			{
				echo "success";
			}
		}

		public function add_ques($gid, $ques){
			global $link;
			$date = time();
			$count = 0;
			$fields = "`gid` = $gid, `date` = $date, ";

			foreach($ques as $col => $val) {
				if ($count++ != 0) $fields .= ', ';
				$col = mysql_escape_string($col);
				$val = mysql_escape_string($val);
				$fields .= "`$col` = '$val'";
			}

			$sql = "INSERT INTO questionnaire SET $fields";
			$result = mysqli_query($link, $sql);
			if(!$result)
			{
				echo "Could not run query successfully.".mysqli_error($link);
			}
			else{
				header("Location:/goal/".$gid);
			}
		}
	}
?>