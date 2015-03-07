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
						header('Location:/');
					}
				}
			}	
		}
	}
?>