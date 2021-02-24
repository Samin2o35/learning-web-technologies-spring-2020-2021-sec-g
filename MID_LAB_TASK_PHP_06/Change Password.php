<?php

	if(isset($_POST['submit'])){

		$currentPassword 	=  $_POST['currpass'];
		$newPassword		=  $_POST['newpass'];
		$retypePassword		=  $_POST['renewpass'];

		if($currentPassword !== $newPassword && $newPassword == $retypePassword)
		{
			echo "Password Changed Successfully";
		}
		
    else{
        echo "Password does not match";
        }
	}
?>

<!DOCTYPE html>

<html>
<head>
	<title>Change Password field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>CHANGE PASSWORD</legend>
			<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="currpass"/> <br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="password" name="newpass"/> <br/></td> 
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="password" name="renewpass"/> <br/></td> 
				</tr>
			</table>
			<hr>
			
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>

