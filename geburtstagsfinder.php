<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>

  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Geburtstagfinder</title>
  <meta name="viewport" content="width=device-width">
	


  <style>
    body {
	  height: calc(100vh - 44px);
      background-image: url("gutschein-geburtstag.jpg");
      background-color: #cccccc;
      overflow:auto;
      text-align:center;
    }
    
    h3{
		border-style:dashed;
		color:#ff0000;
		top:90%;
		position:relative;
		width:30%
		margin:0px 35% 0px 35%;
	}
    
    
  </style>
  
</head>

<body >
	<h1 align="center">BirthdayFinder</h1>
	<Set align= "right" >
	
		<form action="" method="get">

		<div style="position: absolute; left: 60%; top: 20%;"><label for="search">TELEFONNUMMER</label>
			<input name="SetTel" id="search" placeholder="Tel&#8230;" type="tel"><br>
			<label for="search">GEBURTSTAG</label> <input name="SetGeb" id="search" placeholder="tt.mm.jjjj&#8230;" type="date">
			<p>
			<input type="submit" value="absenden" align="left">
			</p>
		</div>
		</form>
    </Set>
    <Get align= "left">
		<form action="" method="get">
		<div style="position: absolute; left: 20%; top: 20%;"><label for="search">TELEFONNUMMER</label>
			<input name="GetTel" id="search" placeholder="Suche&#8230;" type="search"><br> &nbsp;
			<p>
			<input type="submit" value="suchen" align="right">
			</p>
		</div>
		</form>
		
		
	</Get>
	<?php
			include "search.php";
			include "set.php";
	?>
	<h3>
		Wir Übernehmen keine Haftung für die eingegebenen Daten
	</h3>

</body>

</html>
