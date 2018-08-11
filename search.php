<?php
	error_reporting(E_ALL);
	$Tel = $_GET['GetTel'];
	if($Tel != ''){
		
	
	$servername = "localhost";
	$username = "user";
	$password = "123456";
	$list = "BirthdayFinder";
	$connection = new mysqli($servername, $username, $password, $list);
	if($connection->connect_error){
		die("Connetion failed: " . $connection->connectt_error);

	}
	
	$Data = $connection->query("select * from TelNum WHERE Tel = '$Tel'");
	
	while($row = $Data->fetch_assoc()){
		
		echo "<h2 align = center> " . $row['Date'] ."</h2>";
		echo "<h2 align = center> " ."jjjj/mm/tt"."</h2>";
		
	}
	if($Data->num_rows < 1){
		$currDate = (int)date("Y");
		$rand1 = rand(1,12);
		$rand2 = rand(1,28);
		$randt1 = $rand1."";
		$randt2 = $rand2."";
		if($rand1 < 10){
			$randt1 = "0" . $randt1;
		}
		if($rand2 < 10){
			$randt2 = "0" . $randt2;
		}
		
		echo "<h2 align = center> " .rand($currDate-80,$currDate). "-". $randt1 . "-". $randt2 ."</h2>";
		echo "<h2 align = center> " ."jjjj/mm/tt"."</h2>";
		
	}
}
	
?>
