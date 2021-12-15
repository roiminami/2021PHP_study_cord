<?php 
 abstract class baseController
{
	function jump($massege,$time=2,$url="?")
	{
		echo "$massege";
		header("refresh:$time;$url");
		die();
	}
}

 ?>