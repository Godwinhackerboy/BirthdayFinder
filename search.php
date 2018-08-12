<?php
	$Tel = $_GET['GetTel'];
	if($Tel != ''){
		
	
	include "secrets.php";
	$list = "BirthdayFinder";
	$connection = new mysqli($servername, $username, $password, $list);
	if($connection->connect_error){
		die("Connetion failed: " . $connection->connectt_error);

	}
	
	$Data = $connection->query("select * from TelNum WHERE Tel = '$Tel'");
	
	while($row = $Data->fetch_assoc()){
		$tempDat = $row['Date'] . "";
		
		echo "<img style = 'width:70%;opacity:0.9' src='image_create.php?date=$tempDat' alt='Image created by a PHP script' >";
		
	}
	if($Data->num_rows < 1){
		
		
		echo "<img style = 'width:70%;opacity:0.9' src='image_create.php?date=No Data found' alt='Image created by a PHP script' >";
		
		
		
		
		
	}
}
	
?>
