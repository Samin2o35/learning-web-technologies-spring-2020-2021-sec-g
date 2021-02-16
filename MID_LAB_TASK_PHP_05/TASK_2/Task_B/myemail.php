<?php

	if(isset($_POST['submit'])){

		$email		=  $_POST['myemail'];
	
		if($email == ""){
			echo "Null submission...";
		}else{
			echo $email;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Email Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend><b>EMAIL</b></legend>
			Email: 		<input type="email" name="myemail" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>