<?php 
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "http://localhost/2021.05.10/curl_upload/receive.php");

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$filename= dirname(__FILE__).'/a.jpg';
	$data = new CURLFILE($filename);
	$arr_data = array('name'=>'update','img'=>$data);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $arr_data);
	$str = curl_exec($ch);
	if (false===$str) 
	{
		$errno = curl_errno($ch);
		echo curl_strerror($errno);
	}	
	echo "$str";
	curl_close($ch);

 ?>