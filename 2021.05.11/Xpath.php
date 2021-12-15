<?php 
	$filename = "http://flash.weather.com.cn/wmaps/xml/china.xml";

	$xml = simplexml_load_file($filename);

	$state = $xml->xpath('//city/*');
var_dump($state);
	
 ?>