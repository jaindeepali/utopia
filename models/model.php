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
			$sql = "UPDATE user SET name = '".$user['name']."', email = '".$user['email']."' WHERE uid = $uid";
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
	}
?>