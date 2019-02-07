<?php
	session_start();
	$sessid= $_SESSION['ID'];
	
	$xmlDoc = new DomDocument();
//$xmlDoc->load("register.xml")or die("Error: Cannot create object");
	$xmlDoc->load("register.xml") 
	or die("Error: Cannot create object");
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="Campement"/>
	<meta name="keywords" content=""/>
	<meta name="author" content="Jewootah Urvashee"/>
	<title>Summer Paradise! | Welcome </title>
	<link rel="shortcut icon" type="image/png" href="icons/beach.png"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel="stylesheet"/>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
	<link rel="stylesheet" href="./css/font-awesome.min.css"/>
	<script src="jquery-3.3.1.js"> </script>		
</head>
	<header>
		<artical id="banner">
			<h1> <a href="index.xml"> Summer Paradise </a> </h1>
		</artical>
	</header>
<body>
	
	<h2>Choose another appartment for your stay</h2>
	
	<form method="post" action="updatexml.php">
	
		<select name="app">
			<option value="Wonderwoman">1.Wonderwoman</option>
			<option value="Superwoman">2.Superwoman</option>
			<option value="Lady Gaga">3.Lady Gaga</option>
		  </select>
			<input type="submit" name="btnRent" value="Change"/>
	
	</form>

</body>
</html>