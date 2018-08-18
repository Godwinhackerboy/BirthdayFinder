<?php
	include	$_SERVER['DOCUMENT_ROOT'] . "/BirthdayFinder/secrets.php";
	$link = new mysqli($servername, $username, $password,$list);
	$QNum = $_GET['getTel'];
	$result = $link->query("SELECT * FROM $tabelle WHERE $column1 = '$QNum'");
	$json = array();

	while($row = $result->fetch_assoc()){
		//var_dump($row);
		$json[] = $row;



	}
	print json_encode($json);


?>
