<?php

$filename="booking.xml";
session_start();
$id=$_SESSION['ID'];

  $data = simplexml_load_file($filename);

  for($i = 0, $length = count($data->customer); $i < $length; $i++){
  	
    if($data->customer[$i]->clientNIC == $id){

      unset($data->customer[$i]);
      break;
    }
  }

  file_put_contents($filename, $data->saveXML());

//SAMPLE USAGE

for($i = 0, $length = count($data->suggestion); $i < $length; $i++){
  	
      $data->suggestion[$i]->id=$i+1;      
    
  }

 file_put_contents($filename, $data->saveXML());
 header("location:modify.php");

?>