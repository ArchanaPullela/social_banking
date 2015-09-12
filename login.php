<?php

$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "socialnetwork";
	
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	mysql_select_db($db);






	
		$username= $_POST['username'];
		$password= $_POST['password'];
		//$message = "";

		if(empty($username) or empty($password))
		{
			$message = "Please fill all the details!";
		
		}
		else
		{
			$sql = "SELECT pers_id FROM login  WHERE username='$username' AND password='$password'";
			$result = mysql_query($sql);

		while ( $row = mysql_fetch_array($result))
		{ 
				$id = $row['pers_id'];
				
				header('location: http://localhost/social_banking/after_login.php?id=1');
			}

			//header('location : www.google.com');
		}
	
		




	?>
