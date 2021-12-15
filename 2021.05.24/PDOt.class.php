<?php 

	class PDOt 
	{
		function __construct($sum)
		{
			if ($sum>10) 
			{
				throw new Exception("自动", 1);
			}
			else
			{
				//通过
			}
		}
	}
 ?>