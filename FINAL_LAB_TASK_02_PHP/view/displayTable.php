<?php
	$title = "Display Page";
	include('header.php');
	require_once('../model/productsModel.php');
?>

	<?php 
		echo "<fieldset>
			<legend>Display</legend>
				<table border='1'>
				<tr>
					<td>NAME</td>
					<td>PROFIT</td>
					<td colspan='2'></td>
				</tr>";
	
		$row=getAllProduct();
		
		foreach($row as $var){
			
			echo "
					<tr>
						<td>{$var['NAME']}</td>
						<td>{$int['PROFIT']}</td>
						<td><a href='edit.php?id={$var['NAME']}'>edit</a> |
							<a href='../controller/delete.php?id={$var['NAME']}'>delete</a>
						</td>
						
				";
				//?id={$row['ID']}
			
		}

			echo "</table>
				</fieldset>";


?>

	
<?php
	include('footer.php');
?>
