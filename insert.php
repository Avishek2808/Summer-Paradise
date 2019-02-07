<?php

	$xml= new DomDocument("1.0","UTF-8");
	$xml->load("register.xml");
	
	if (!$xml){
		$clients=$xml->createElement("clients");
		$xml->appendChild($clients);
	}
	else{
		$clients=$xml->firstChild;
	}
	
	$fname = $_POST["fname"];
	$nic = $_POST['nic'];
	$state = $_POST['state'];
	$pwd = $_POST['pwrd'];
	$country = $_POST['country'];
	$phone=$_POST['phne'];
	$mail = $_POST['mail'];
	
	$client = $xml->createElement("client");
	$clients->appendChild($client);
	
	$fullname = $xml->createElement("fullName", $fname);
	$client->appendChild($fullname);
	
	$nicard = $xml->createElement("nic", $nic);
	$client->appendChild($nicard);
	
	$state = $xml->createElement("state", $state);
	$client->appendChild($state);
	
	$cntry = $xml->createElement("country", $country);
	$client->appendChild($cntry);
	
	$passwrd = $xml->createElement("password", $pwd);
	$client->appendChild($passwrd);
	
	$phone = $xml->createElement("phone", $phone);
	$client->appendChild($phone);
	
	$mail = $xml->createElement("email", $mail);
	$client->appendChild($mail);
	
	$xml->save("register.xml");

	header('Location:form.php?id=1');
?>