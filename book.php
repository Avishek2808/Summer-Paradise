<?php
	session_start();
	$sessid=$_SESSION['ID'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="description" content="Campement">
	<meta name="keywords" content="do it yourself, do it yoself, DIY">
	<meta name="author" content="Jewootah Urvashee">
	<title>Summer Paradise! | Welcome </title>
	<link rel="shortcut icon" type="image/png" href="icons/beach.png">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<script src="jquery-3.3.1.js"> </script>		
</head>
	<header>
		<artical id="banner">
			<h1> <a href="index.xml"> Summer Paradise </a> </h1>
		</artical>
	</header>
<body>
<h1>Book Now</h1>
<form name="book" action="booking.php" method="post">
<table>
	<tr>
		<td>Appartment to be booked: </td>
		<td><select name="app">
			<option value="Wonderwoman">1.Wonderwoman</option>
			<option value="Superwoman">2.Superwoman</option>
			<option value="Lady Gaga">3.Lady Gaga</option>
		  </select>
		</td>
	</tr>
	<tr>
		<td>Book From:</td>
		<td><input type="date" name="bookf" /></td>
	</tr>
	<tr>
		<td>To:</td>
		<td><input type="date" name="bookt" /></td>
	</tr>
</table>
	<button class="btnrent" type='submit'>Book</button>

</form>

		<footer> <a href="contact.html"> Contact us for booking </a></footer>

</body>
</html>