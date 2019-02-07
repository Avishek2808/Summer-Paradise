<?php

	session_start();
	$sessid= $_SESSION['ID'];

	$xml= new DomDocument("1.0","UTF-8");
	$xml->load("booking.xml");
	
	if (!$xml){
		$booking=$xml->createElement("booking");
		$xml->appendChild($booking);
	}
	else{
		$booking=$xml->firstChild;
	}
	
	$app = $_POST["app"];
	$bookf = $_POST['bookf'];
	$bookt = $_POST['bookt'];
	
	$customer = $xml->createElement("customer");
	$booking->appendChild($customer);
	
	$sessid = $xml->createElement("clientNIC", $sessid);
	$customer->appendChild($sessid);
	
	$app = $xml->createElement("appName", $app);
	$customer->appendChild($app);
	
	$bookf = $xml->createElement("bookingFrom", $bookf);
	$customer->appendChild($bookf);
	
	$bookt = $xml->createElement("to", $bookt);
	$customer->appendChild($bookt);
	
	$xml->save("booking.xml");

	header('Location:modify.php');
?>