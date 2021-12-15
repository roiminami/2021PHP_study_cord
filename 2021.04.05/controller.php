<?php 
	//调模型文件
	require_once('model.class.php');
	//获取地址栏传递的参数
	$type =isset($_GET['type']) ? $_GET['type'] : 1;
	//对象实例化后，根据传递的不同要求，调用模型类的不同方法；
	$modelobj=new DataTime2();

	switch ($type) {
		case 1:
			$str=$modelobj->getDate();
			break;
		case 2:
			$str=$modelobj->getTime();
			break;
		default:
			$str=$modelobj->getDateTime();
			break;
	}

	//调视图
	include "view.html";

 ?>