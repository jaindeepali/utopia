<?php
	require_once('../config/config.php');
	$sql = "SELECT email FROM user";
	$result = mysqli_query($link, $sql);
	if(!$result)
	{
		echo "Could not run query successfully.".mysqli_error($link);
	}
	else{
		while($row = mysqli_fetch_assoc($result))
		{
			$to      = $row['email'];
			$subject = 'Productivity';
			$message = "Complete today's questionnaire!".
				"\r\n"."Track you progress. Are you closer to achieving your goals?".
				"\r\n"."Visit womenmentor.local/goals and fill today's questionnaires.";
			$message = urlencode($message);
			$headers = 'From: productivity@prod.com' . "\r\n" .
			    'Reply-To: productivity@prod.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
		}
	}
?>