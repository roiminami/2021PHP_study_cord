<?php 
	require_once('./smarty-master/libs/smarty.class.php');
	$smarty = new smarty();
	$smarty->left_delimiter ='<{';
	$smarty->right_delimiter='}>';
	
	$arr = array(10010,222,333,444,555,666);
	$arrs =array
	(
		array("张三","大学毕业","工人"),
		array("李四","小学毕业","老板"),
		array("王五","中学毕业","打工人"),
	);
	$smarty->assign("arr",$arr);
	$smarty->assign("arrs",$arrs);


	$arr1=array(1,2,3,4,5,6,7,8,9,10,11,12,13);
	$smarty->assign("arr1",$arr1);
	$title = "you are wellcome";
	$smarty->assign("title",$title);


	$smarty->display('view.html');
 ?>