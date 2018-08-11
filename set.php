<?php
$Tel = $_GET['SetTel'];
$BD = $_GET['SetGeb'];
$servername = "localhost";
$username = "user";
$password = "123456";
$list = "BirthdayFinder";
$TempArr = array();

$connection = new mysqli($servername, $username, $password,$list);
if($conection->connect_error){
  die("Connetion failed: " . $conn->connectt_error);

}
//check for format

$TempArr = $connection->query("select * from BirthdayFinder WHERE Tel = '$Tel'");
if(count($TempArr) > 0){
  header("Location: geburtstagsfinder.html");
}
else {
  $sql = "INSERT INTO BirthdayFinder VALUE ('$Tel','$BD')";
}



$connection->close();
?>
