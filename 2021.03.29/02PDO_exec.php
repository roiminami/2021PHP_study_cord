<?php 
	require_once('01PDO.php');
	$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	try{
		$sql = "select * from photos1";
		$PDOStatement = $PDO->query($sql);
	}
	catch(Exception $error)
	{
		echo $error->getCode();
	}
	
	
?>