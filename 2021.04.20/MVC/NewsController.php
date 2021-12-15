<?php 

	require_once("NewsModel.class.php");
	
	$a = $_GET['a'] ? $_GET['a'] : "index";
	if ($a=="index") 
	{	
		$NewsModel = new NewsModel;
		$showIndex = $NewsModel->index();
		include "NewsIndexView.html";
	}
	elseif($a=="add")
	{
		include 'NewsAddView.html';
	}
	elseif ($a=="insert") 
	{
		$NewsModel = new NewsModel;
		if ($NewsModel->insert($_POST)) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
	elseif($a=="edit")
	{
		include 'NewsEditView.html';
	}
	elseif($a=="update")
	{
		$NewsModel = new NewsModel;
		if ($NewsModel->update($_POST)) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
	elseif($a="delete")
	{
		$NewsModel = new NewsModel;
		if ($NewsModel->delete($_GET['id'])) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}

	}
	
		
 ?>
	
