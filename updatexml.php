<?php

$xml=simplexml_load_file("booking.xml") or die("Error: Cannot create object");
session_start();

foreach($xml->children() as $booking) {

$nodeselect=$booking->clientNIC;


if($nodeselect==$_SESSION['ID']){

	$booking->appName=$_POST['app'];
	
	echo $nodeselect;
}

}


file_put_contents('booking.xml', $xml->asXML());

header("location:modify.php?opp=2");

?>