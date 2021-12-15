<?php 
	session_start();
	if (empty($_SESSION['admin']))
	{
		echo "まず、登録しなさい";
		header("refresh:3;url='1login.php'");
		die();
	}
	$id = $_GET['id'];
	require_once('conn.php');
	$mql = "SELECT * FROM `photos` where id=$id";
	$result = mysqli_query($link,$mql);
	$row=mysqli_fetch_assoc($result);
	$title = $row['title'];
	$intro = $row['intro'];
	$imgurl = $row['imgurl'];
	$time = $row['time'];
	$time = date("Y-m-d",$time);
	$hits = $row['hits']+1;
	$sql = "UPDATE photos SET hits=$hits WHERE id=$id";
	mysqli_query($link,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <style>
 	html{background-color: #D2E9FD}
		body{background-color: white;margin: 0 auto;width: 1000px;
		}
		header{background-color: #9DD7FF;text-align: center;padding-bottom: 40px;
			padding-top: 40px;border-bottom: 2px solid black;margin-bottom: 30px;}
		.title{font-size: 35px;font-weight:bold;}
		.title2{margin-top: 20px;font-weight:bold;}
		.img{width: 800px; border: 1px solid green;margin: auto;text-align: center;padding-top:30px; }
		img{width: 750px;margin: auto;border: 1px white solid;margin-bottom: 30px;}
 </style>
 <body>
		<header>
		<div class="title">写真詳細</div><br>
		アップロード日づけ:<span class="title2" ><?php echo "$time"; ?></span>　
			アクセス回数：<span style="color: red;"><?php echo "$hits"; ?></span><br>
			<span><a href="3index.php">一個前の画面に戻る</a></span>
		</div>
	</header>
		<div class="img">
			<img align="middle" src="<?php echo "$imgurl" ?>" >
		</div>
		<h2 align="center"><?php echo "$title";?></h2>
		<h4 style="margin-left: 30px;">写真詳細：<?php echo "$intro"; ?></h4>
		

		
 </body>
 </html>