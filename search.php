<?php
	$Tel = $_POST['getTel'];
	if($Tel != ''){


	include "secrets.php";

	$connection = new mysqli($servername, $username, $password, $list);
	if($connection->connect_error){
		die("Connetion failed: " . $connection->connectt_error);

	}

	$Data = $connection->query("SELECT * FROM $tabelle WHERE $column1 = '$Tel'");

	while($row = $Data->fetch_assoc()){
		$tempDat = $row[$column2] . "";

		echo "<img style = 'width:70%;opacity:0.9' src='image_create.php?date=$tempDat'  >";

	}
	if($Data->num_rows < 1){


		echo "<img style = 'width:70%;opacity:0.9' src='image_create.php?date=No Data found'  >";





	}
}

?>
