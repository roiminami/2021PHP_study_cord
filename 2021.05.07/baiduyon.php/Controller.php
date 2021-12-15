<?php 
require_once('Model.php');
	if (!isset($_GET['a'])) 
	{
		include "View.html";
		die();
	}
	$a=$_GET['a'];
	$haystack = array('criateH','deleteH','changeModH','renameH','opendirH','fopenH','file_arrH','file_putH','unlink_dirH');
	if (in_array($a, $haystack)) 
	{
		include 'fileName.html';
	}
	else
	{
		$fileName=$_POST['fileName'];
		$Model = new Model;
		$chmod = $_POST['changeMod'] ?? "";
		$rename = $_POST['rename'] ?? "";
		$mode = $_POST['mode']?? "";
		$url = $_POST['url']??"";
		if (!empty($mode)) 
		{
			$Model->$a($fileName,$mode);
		}
		elseif (!empty($url)) 
		{
			$Model->$a($fileName,$url);
		}
		elseif (!empty($chmod)) 
		{
			$Model->$a($fileName,$chmod);
		}
		elseif(!empty($rename))
		{
			$Model->$a($fileName,$rename);
		}
		else
		{
			$Model->$a($fileName);
		}
		
		
		
	}
 ?>