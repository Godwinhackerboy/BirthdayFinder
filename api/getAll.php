<?php
	include 'secrets.php';
	$link = new mysqulli($servername, $username, $password,$list);
	$result = $link->query("select * from TelNum")
	$json = array();
	while($row = $result->fetch_assoc()){
		//var_dump($row);
		$json[] = $row;



	}
	print json_encode($json);


?>
