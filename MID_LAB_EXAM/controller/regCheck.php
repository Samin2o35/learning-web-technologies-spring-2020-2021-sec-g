<?php
	session_start();

	if(isset($_POST['signup'])){

		$name = $_POST['name'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$id = $_POST['id'];

		if($name == "" || $password == "" || $id == ""){
			echo "null value found...";
		}else{
			
		}
	}


?>