<?php
	$link = new mysqulli("localhost", "root","123456","Birthdayfinder");
	$result = $link->query("select * from TelNum")
	$json = array();
	while($row = $result->fetch_assoc()){
		//var_dump($row);
		$json[] = $row;
		
		
		
	}
	print json_encode($json);


?>
