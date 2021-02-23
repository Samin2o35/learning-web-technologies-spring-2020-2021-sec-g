<!DOCTYPE html>

<html>
<head>
	<title>Login field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>LOGIN</legend>
			User Name: 		<input type="text" name="username" value=""> <br>
			Password: 	<input type="password" name="password" value=""> <br><hr>
						<input type="checkbox" name="remember" id="remember">
						<label for="remember-me">Remember Me</label><br>
						<input type="submit" name="submit" value="Submit">
						<a href="">Forgot Password?</a>
		</fieldset>
	</form>
</body>
</html>

<?php

	if(isset($_POST['submit'])){

		$username 		=  $_POST['username'];
		$password	=  $_POST['password'];

		if($username == "" || $password == ""){
			echo "Null submission...";
		}
		else if(strlen(trim($password)) < 8)
		{
			echo"Password must not be less than 8 characters...";
		}
		else if(strlen(trim($username)) <= 2)
		{
			echo"Username must be atleast 2 characters...";
		}
		else
		{
			echo $username;
			echo "<br>";
			echo $password;
		}
	}
?>
