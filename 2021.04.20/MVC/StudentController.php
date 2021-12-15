<?php 

	require_once("StudentModel.class.php");
	
	$a = $_GET['a'] ? $_GET['a'] : "index";
	if ($a=="index") 
	{	
		$StudentModel = new StudentModel;
		$showIndex = $StudentModel->index();
		include "StudentIndexView.html";
	}
	elseif($a=="add")
	{
		include 'StudentAddView.html';
	}
	elseif ($a=="insert") 
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->insert($_POST)) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
	elseif($a=="edit")
	{
		include 'StudentEditView.html';
	}
	elseif($a=="update")
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->update($_POST)) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}
	}
	elseif($a="delete")
	{
		$StudentModel = new StudentModel;
		if ($StudentModel->delete($_GET['id'])) 
		{
			echo "ok";
			header("refresh:2;url='?'");
			die();
		}

	}
	
		
 ?>
	
