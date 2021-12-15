<?php 

    $url='https://opac3.tcue.ac.jp/webopac/comidf.do';
    $data=array();
    $data['display']="topmnu";
    $data['userid']="219-431";
    $data['password']="f5i-9n";
    $data['url']="ufisnd.do?redirect_page_id=13";


	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,$url);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	curl_setopt($ch, CURLOPT_COOKIESESSION, true);

	$cookieFile=dirname(__FILE__)."/cookie.txt";

	curl_setopt($ch, CURLOPT_COOKIEFILE,$cookieFile);

	curl_setopt($ch, CURLOPT_COOKIEJAR,$cookieFile);

	curl_setopt($ch, CURLOPT_COOKIE, session_name().'='.session_id());

	curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
	// https请求 不验证证书和hosts
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 

	// 从证书中检查SSL加密算法是否存在(默认不需要验证）
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

	curl_setopt($ch, CURLOPT_POST, 1);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	
	$res=curl_exec($ch);

	var_dump($res);

 ?>



