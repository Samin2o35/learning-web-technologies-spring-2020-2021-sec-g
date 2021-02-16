<!DOCTYPE html>
<html>
<head>
	<title>Email Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend><b>EMAIL</b></legend>
			Name: 		<input type="email" name="myemail" value="<?php if(isset($_POST['myemail'])){ echo $_POST['mynemail']; }?>"> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
