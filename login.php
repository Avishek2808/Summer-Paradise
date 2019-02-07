<?php
	session_start();
	
	$xmlDoc = new DomDocument("1.0","UTF-8");
	
	$xmlDoc->load("register.xml");
	
	$clients=$xmlDoc->getElementsByTagName("clients");
	
	$nic = $_POST['nic'];
	$pwrd = $_POST['pwrd'];

	foreach($clients as $client){
		$nics=$client->getElementsByTagName("nic");
		
		for($i=0;$i<$nics->length;$i++){
			
			$nicard=$nics->item($i)->nodeValue;
			
			if($nicard==$nic){
				
				$pwd=$client->getElementsByTagName("password");
				$password=$pwd->item($i)->nodeValue;
				
				if($password==$pwrd){
					$_SESSION['ID']=$_POST['nic'];
					header('Location:book.php');
				}
				else{
					$_SESSION['alert']="Login Unsuccessful";
					header('Location:form.php');
				}
			}
		}
	}
?>