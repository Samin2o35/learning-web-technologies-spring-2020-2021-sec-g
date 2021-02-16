<?php

	if(isset($_POST['submit'])){

		$Gender 		=  $_POST['mygender'];

		if($Gender == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>