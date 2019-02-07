<?php 
$xml = new DOMDocument();
$xml->load('campement.xml');
 
$xsl = new DOMDocument;
$xsl->load("campement.xslt");
 
$proc = new XSLTProcessor();
$proc->importStyleSheet($xsl);
 
echo $proc->transformToXML($xml);
?>
