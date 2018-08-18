<?php
	include	$_SERVER['DOCUMENT_ROOT'] . "/BirthdayFinder/secrets.php";
	$link = new mysqli($servername, $username, $password,$list);
	$QNum = $_GET['GetTel'];
	$result = $link->query("select * from TelNum WHERE Number = '$QNum'");
	$json = array();
	while($row = $result->fetch_assoc()){
		//var_dump($row);
		$json[] = $row;



	}
	print json_encode($json);


?>
