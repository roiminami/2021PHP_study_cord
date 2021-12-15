<?php 
	$filename = "..\get_wether\wether.xml";
	$xml = simplexml_load_file($filename);
	
	$xml->addChild('string','多喝温水');

	var_dump($xml);

	$filename="rewhiteXml.xml";
	$xml->asXML($filename);



 ?>