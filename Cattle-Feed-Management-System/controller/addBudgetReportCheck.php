<?php
	session_start();
	require_once('../model/budgetReportModel.php');

	if(isset($_POST['submit'])){
        $fUsername= $_POST['fUsername'];
		$sBudget = $_POST['sBudget'];
		$bUsed = $_POST['bUsed'];
		

		if($fUsername == "" || $sBudget == "" || $bUsed == ""){
			echo "null value found...";
		}else{

			$data = [	
				'fUsername' => $fUsername, 
				'sBudget' => $sBudget, 
				'bUsed' =>$bUsed
			];
			$status = insertData($data);				

			if($status){
				header('location: ../view/budgetReport.php');
			}else{
				echo "error..try again";
			}
		}
	}
?>