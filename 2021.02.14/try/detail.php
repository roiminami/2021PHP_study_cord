<?php 
	session_start();
	if (empty($_SESSION['username'])) 
	{
	 	echo "请先登录！";
	 	header("refresh:3;url='./login.php'");
	 	die();
	 } 
	 	$id=$_GET['id'];
	 	require_once('conn.php');
	 	$sql = "UPDATE photos SET hits=hits+1 WHERE id=$id";
	 	mysqli_query($link,$sql);
	 	$sql = "SELECT * FROM photos where id=$id";
	 	$result = mysqli_query($link,$sql);
	 	$one_row = mysqli_fetch_assoc($result);
	 	$title= $one_row['title'];
	 	$time = $one_row['adtime'];
	 	$img = $one_row['imgsrc'];
	 	$intro = $one_row['intro'];
	 	$hits = $one_row['hits'];

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style>
 		html{margin-top: 0px;}
 		body{width: 1000px;background-color: #0D2F6D;margin: auto;}
 		.box{background-color: white;text-align: center;border-bottom: 3px solid black;}
 		.box1{border-bottom: 3px solid black;background-color: #AED3FD;padding-top: 30px;}
 		.box1-1{font-size: 60px;}
 		.box1-2{padding-bottom: 5px;}
 		.img{padding-top: 20px;}
 		img{width: 700px;}
 		.text1{margin:30px;}
 	</style>
 </head>
 <body>
 	<div class="box">
	 	<div class="box1">
	 			<div class="box1-1"><?php echo $title; ?></div>
	 			<div class="box1-2">访问<?php echo "$hits"; ?>次, 发布时间:<?php echo date('Y-m-d H:i:s' ,$time); ?>
	 				<a href="ndex.php">返回首页</a>
	 			</div>
	 	</div>
	 	<div class="img">
	 	<img src="<?php echo $img; ?>">
	 	</div>
	 	<div class="text1">
	 	<?php echo $intro; ?>
	 	</div>








	</div>
 	
 </body>
 </html>