<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend><b>GENDER</b></legend>
			Gender: 	<input type="radio" name="Gender" value="<?php if(isset($_POST['myGender'])){ echo $_POST['myGender']; }?>"> Male
						<input type="radio" name="Gender" value="<?php if(isset($_POST['myGender'])){ echo $_POST['myGender']; }?>"> Female
						<input type="radio" name="Gender" value="<?php if(isset($_POST['myGender'])){ echo $_POST['myGender']; }?>"> Other <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>

