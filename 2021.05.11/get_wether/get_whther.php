<?php	
	$url="http://ws.webxml.com.cn/WebServices/WeatherWS.asmx/getWeather";
	$data = "theCityCode=2222&theUserID=";
	$header =array();
	
	$header[]="Host: ws.webxml.com.cn";
	$header[]="application/x-www-form-urlencoded";
	
	$header[]="Content-Length: ".strlen($data);
	$header[]="User-Agent: ".$_SERVER['HTTP_USER_AGENT'];
	


	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL,$url );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_POST,1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_HTTPHEADER,$header);

	$res = curl_exec($ch);

	var_dump($res);
	
	curl_close($ch);
	
	file_put_contents('wether.xml',$res);


 ?>