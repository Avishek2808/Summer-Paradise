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
	<div id="form">
		<form name="register" action="insert.php" method="POST">
			<table cellpadding=5>
				<tr>
					<td>Full name:</td><td> <input type='text' name='fname' required/> </td>
					<td> NIC:</td> <td> <input type='text' name='nic' required/> </td>
				</tr>
				<tr>
					<td>Password:</td><td> <input type='password' name='pwrd' required/> </td>
				</tr>
				<tr>
					<td> State: </td> <td> <input type="text" name='state'> </td>
					<td> Country: </td> <td> <input type="text" name="country"></td>
				</tr>
				<tr>
				<td> Phone: </td> <td> <input type="text" name="phne" required/> </td>
				<td> Email: </td> <td> <input type="email" name="mail"> </td>
				</tr>
			</table>
			<button class="btnrent" type='submit'>Register to book</button>
			<button class="btnrent" type='button' onclick="loginDets()">Login</button>
		</form>
		</br>
	
		<?php
			if(isset($_GET['id'])){
				if ($_GET['id']==1){
					echo "You are now registered. Click on login to continue.";
				}
				if ($_GET['id']==2){
					echo "Booking confirmed";
				}
			}
		?>
		
		<div id="logindets"></div>
		
		<script> 
			function loginDets() {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("logindets").innerHTML = this.responseText;
					}
				}
				xmlhttp.open("GET", "login.html", true);
				xmlhttp.send();
			}
		</script>
	</div>
	
</body>
</html>