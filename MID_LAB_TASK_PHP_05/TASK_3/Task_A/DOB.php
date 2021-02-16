<?php

	if(isset($_POST['submit'])){

		$DOB 		=  $_POST['myDOB'];

		if($DOB == ""){
			echo "Null submission...";
		}else{
			echo "Success";
		}

	}else{
		echo 'invalid request...';
	}


?>