<?php

	if(isset($_POST['submit'])){

		$DOB		=  $_POST['myDOB'];
	
		if($DOB == ""){
			echo "Null submission...";
		}else{
			echo $DOB;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>DOB Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend><b>DATE OF BIRTH</b></legend>
			Date of Birth : 		<input type="date" name="myDOB" value=""> <br>
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>
