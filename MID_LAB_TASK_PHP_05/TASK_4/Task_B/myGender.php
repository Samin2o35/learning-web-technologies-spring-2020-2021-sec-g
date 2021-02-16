<?php

	if(isset($_POST['submit'])){

		$Gender		=  $_POST['myGender'];
	
		if($DOB == ""){
			echo "Null submission...";
		}else{
			echo $Gender;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gender Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend><b>GENDER</b></legend>
			Gender: 	<input type="radio" name="Gender" > Male
						<input type="radio" name="Gender"> Female
						<input type="radio" name="Gender"> Other  <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>