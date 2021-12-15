<?php 
	$dsn="mysql:host=127.0.0.1;dbname=php68;charset=utf8";
	$username="root";
	$password = "root";
	$pdo = new PDO($dsn,$username,$password);
	$sql1 = "INSERT INTO photos(id,title,intro,imgurl,time,hits)VALUES(:id,:title,:intro,:imgurl,:time,:hits)";
	$sql2 = "INSERT INTO photos(id,title,intro,imgurl,time,hits)VALUES(?,?,?,?,?,?)";
	$PDOStatement =$pdo->prepare($sql2);
	$PDOStatement->bindValue(1,null);
	$PDOStatement->bindValue(2,'adsfasd5');
	$PDOStatement->bindValue(3,'12345');
	$PDOStatement->bindValue(4,'123456');
	$PDOStatement->bindValue(5,1111111111);
	$PDOStatement->bindValue(6,4);
	$PDOStatement->execute();
	var_dump($sql1);



 ?>