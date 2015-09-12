<?php

$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "socialnetwork";
	
	
	$conn = mysql_connect($dbhost,$dbuser,$dbpass);
	
	mysql_select_db($db);
?>

<html>
<head>
<title>register</title>
<link rel="stylesheet" href="styleo.css">
</head>
<body>

<div class='container'>
<h2> Register a new account </h2>
<form method='post'>
	<?php

	if(isset($_POST['submit']))
	{
		$username= $_POST['username'];
		$password= $_POST['password'];

		if(empty($username) or empty($password))
		{
			$message = 'Please fill all the details!';
		}
		else
		{
			mysql_query("INSERT INTO users VALUES('','".$username."','".md5($password)."')");
			$message = "OK ! now login!";
		}

		echo "<div class='box'>$message</div>";

	}




	?>
	Username: <br />
	<input type="text" name='username' autocomplete='off' />
	<br /><br />
	password:<br />
	<input type="password" name='password' /><br /><br />
	<input type='submit' name='submit' value='Register'>

</form>



</div>



</body>
</html>
