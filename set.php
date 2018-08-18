<?php

$Tel = $_GET['setTel'];
$BD = $_GET['setGeb'];
if($Tel != ''){
include "secrets.php";


$connection = new mysqli($servername, $username, $password, $list);
if($connection->connect_error){
  die("Connetion failed: " . $connection->connectt_error);

}
//check for format


$TempArr = $connection->query("SELECT * FROM $tabelle WHERE $column1 = '$Tel'");

if($TempArr->num_rows > 0){
	//echo $TempArr->num_rows;
	//header("Location: geburtstagsfinder.html");
}
else {
  $sql = "INSERT INTO $tabelle ($column1,$column2) VALUE ('$Tel','$BD')";
  if ($connection->query($sql) === TRUE) {
    //echo "New record created successfully";
	}

}

//echo "ASdf";

$connection->close();
}
?>
