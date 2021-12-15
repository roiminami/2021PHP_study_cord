<?php 
	require_once('./conn.php');	
	session_start();
	if (empty($_SESSION['username'])) 
	{
		header("location:./login.php");
		die();
	}
	$sql = "SELECT * FROM photos ORDER BY id DESC";
	$result = mysqli_query($link,$sql);
	$records = mysqli_num_rows($result);
	$pagesize = 3;
	$page = isset($_GET['page']) ? $_GET['page']:1;
	$startpage = ($page-1)*$pagesize;
	$pages = ceil($records/$pagesize) ;
	$sql.=" LIMIT $startpage,$pagesize";
	$result = mysqli_query($link,$sql);
	$rowList=mysqli_fetch_all($result, MYSQLI_ASSOC);
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	body,ul,li,h2,a{margin:0px;padding:0px}
	body{font-size:14px;color:#444;background-color:white;}
	ul,li{list-style: none;}
	a{text-decoration:none;color:#444;}
	a:hover{color:red;} 
	.box{width:980px;margin:0px auto;background-color: white;
	}
	.over-flow{
    overflow: auto; zoom: 1;
}
	.photos li{
	float:left;
	width:290px;
	padding:8px 5px;
	margin:10px;
	text-align:center;
	border:1px solid red;
	}
	.photos img{width:280px;height:160px;}
	.title{
	text-align:center;
	padding: 10px 0px;
	border-bottom: 2px solid #444;
	background-color:#d0e9ff;
	}
	.page{width: 800px; margin:20px auto; }
	.copage{margin-left: 60px;font-weight: bold; }
	</style>
	

<body>
<div class="box over-flow" >
	<div class="title" >
		<h2>我的相册</h2>
		<div class="css1-2"><a href="./upload.php">
		上传照片 
	</a> 共有<b><?php echo $records;?></b>张照片</div>
	</div>
	<ul class="photos">
		<?php 
		foreach ($rowList as $key => $value) 
		{
		 ?>
		<li>
		<a href="./detail.php?id=<?php echo $value['id']?>"><img src="<?php echo $value['imgsrc'] ?>"></a>
		<a href="./detail.php?id= <?php echo $value['title'] ?>"><?php echo $value['title'] ?></a>
		</li>
	<?php } ?>
</ul>
	
</div>
<div class="page">
	<?php 
	if ($page<=5) 
	{
	for ($i = 1 ; $i <= 10 ; $i++) 
	{ 
		echo "<a  href='? page=$i'>第{$i}页</a> &nbsp|&nbsp ";
	}
	}
	elseif ($page>5 && $page<=$pages-5) 
	{
		$start = $page-5;
		$end = $page+4;
		for ($i=$start; $i <= $end; $i++) 
		{ 
			echo "<a  href='? page=$i'>第{$i}页</a> &nbsp|&nbsp ";
		}
	}
	elseif ($page>$pages-5) 
	{
		for ($i=$pages-9; $i <= $pages; $i++) 
		{ 
			echo "<a  href='? page=$i'>第{$i}页</a> &nbsp|&nbsp ";
		}
	}
	 ?>
	<?php if ($page != $pages) 
	{
		$page+=1;
		echo "<a class='copage' href='?page=$page'>下一页 ></a>";
	}
	 ?>
</div>

</body>
</html>