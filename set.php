<?php
error_reporting(E_ALL);
$Tel = $_GET['SetTel'];
$BD = $_GET['SetGeb'];
$servername = "localhost";
$username = "user";
$password = "123456";
$list = "BirthdayFinder";

$connection = new mysqli($servername, $username, $password, $list);
if($conection->connect_error){
  die("Connetion failed: " . $conn->connectt_error);

}
//check for format

$TempArr = $connection->query("select * from TelNum WHERE Tel = '$Tel'");
if($TempArr->num_rows > 0){
	echo $TempArr->num_rows;
	//header("Location: geburtstagsfinder.html");
}
else {
  $sql = "INSERT INTO TelNum (Tel,Date) VALUE ('$Tel','$BD')";
  if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
	}
  
}

//echo "ASdf";

$connection->close();
?>
