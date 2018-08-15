<?php
	$link = new mysqulli($servername, $username, $password,$list);
	$QNum = "";
	$result = $link->query("select * from TelNum WHERE Number = '$QNum'");
	$json = array();
	while($row = $result->fetch_assoc()){
		//var_dump($row);
		$json[] = $row;



	}
	print json_encode($json);


?>
