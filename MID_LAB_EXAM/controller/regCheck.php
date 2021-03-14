<?php
	session_start();

	if(isset($_POST['registration'])){

		$id = $_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		
		if($id == "" || $name == "" || $password == ""){
			echo "null value found...";
		}
		else{
			if($password == $repass){

				$user = [ 'id'=>$id, 'name'=> $name, 'password'=> $password];
				$formdata = array(
					'name'=> $_POST["name"],
					'password'=> $_POST["password"],
					'id'=> $_POST["id"]
					
				 );
				
				$existingdata = file_get_contents('../model/Users.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//Convert updated array to JSON
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//write json data into data.json file
				if(file_put_contents("../model/Users.json", $jsondata)) {
					 echo "User details updated <br>";
				 }
				else 
					 echo "No updates recieved";
				
				$data = file_get_contents("../model/Users.json");
				$mydata = json_decode($data);
				
				
				
				
				
						$_SESSION['name'] = '';
						$_SESSION['password'] = "";
				
						echo "User Id is: " . $_SESSION['name'];
						echo "<br>";
						echo "Password is: " . $_SESSION['password'];

			
				$_SESSION['current_user'] = $user;

				header('location: ../view/login.html');
			}else{
				echo "password mismatch. Try again...";
		}
	}


?>