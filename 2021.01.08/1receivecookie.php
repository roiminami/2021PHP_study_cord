<?php 
	session_start();
	echo "用户名:".$_SESSION['name'];
	echo "性别：" .$_SESSION['sex'];
	
     print_r($_COOKIE);
 ?>
