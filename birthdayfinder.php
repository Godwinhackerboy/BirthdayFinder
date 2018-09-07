<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Geburtstagfinder</title>
  <meta name="viewport" content="width=device-width">



  <style>
    body {
	  height: calc(100vh);
      background-image: url("gutschein-geburtstag.jpg");
      background-color: #cccccc;
      overflow:visible;
      text-align:center;
      background-size:     cover;
      background-repeat:   no-repeat;
      background-position: center center;
    }

    h3{
		background-color:white;
		border-style:dashed;
		color:#ff0000;
		top:50%;
		position:relative;
		width:30%
		margin:0px 35% 0px 35%;
	}



  </style>

</head>

<body >
	<h1 align="center">BirthdayFinder</h1>
	<form action="" method="post">
	<table style="width:100%">
		<tr>
			<td>Telefonnummer</td>
			<td>Telefonnummer</td>
		</tr>
		<tr>
			<td><input name="setTel" id="search" placeholder="Tel&#8230;" type="tel"><br></td>
			<td><input name="getTel" id="search" placeholder="Suche&#8230;" type="tel"><br></td>

		</tr>
		<tr>
			<td>Geburtsdatum</td>
			<td></td>
		</tr>
		<tr>
			<td><input name="setGeb" id="search" placeholder="tt.mm.jjjj&#8230;" type="date"></td>
			<td></td>

		</tr>
		<tr>
			<td><input type="submit" value="absenden" ></td>
			<td><input type="submit" value="suchen" ></td>

		</tr>
	</table>
	</form>
	<h3>

		Wir Übernehmen keine Haftung für die eingegebenen Daten
	</h3>


	<?php
			include "search.php";
			include "set.php";
	?>


</body>

</html>
