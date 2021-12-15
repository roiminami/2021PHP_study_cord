<?php 
	session_start();
	if (empty($_SESSION['admin'])) 
	{
		echo "先ず、ログインしなさい！";
		header("refresh:1;url='1login.php'");
		die();
	}
	require_once('conn.php');
	$sql="select * from photos order by id desc ";
	$result = mysqli_query($link,$sql);
	$records = mysqli_num_rows($result);
	$pagesize = 6;
	$page = isset($_GET['page']) ? $_GET['page']:1;
	$start_row = ($page-1)*$pagesize;
	$pages = ceil($records/$pagesize);
	$sql.="limit $start_row,$pagesize";
	$result = mysqli_query($link,$sql);
	$rowlist = mysqli_fetch_all($result,MYSQLI_ASSOC);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>個人アルバム</title>
 </head>
 <style>
		html{background-color: #D2E9FD}
		body{background-color: white;margin: 0 auto;width: 1000px;height: 800px;
		}
		header{background-color: #9DD7FF;text-align: center;padding-bottom: 40px;
			padding-top: 40px;border-bottom: 2px solid black}
		.title{font-size: 35px;font-weight:bold;}
		.title2{margin-top: 20px;font-weight:bold;}
		li{list-style-type:none;};
		.over-flow{
    		overflow: auto; zoom: 1;
		}
		.photos img{width:280px;height:160px;}
		.clear {
      clear: both;
      height: 0;
      line-height: 0;
      font-size: 0
    }
		.photos li
		{
			float: left;
			width: 280px;
			padding:8px 5px;
			margin:10px;
			text-align:center;
		}
		.a a {
			text-decoration: none;
			color: #232323;}
		.a a:hover{margin:12px;border: 1px solid red;width: 40px;padding: 5px 10px;color:red;font-weight: bold;}
		.a a{ margin:12px;border: 1px solid blue;width: 40px;padding: 5px 10px;}


	</style>
 <body class="over-flow">
 	<header>
		<div class="title">個人アルバム画面</div>
		<div class="title2"><a href="./4upload.php">写真をアップロード</a>　
			<span style="color: red;"><?php echo "$records"; ?></span>枚写真がアップロードされてあります
		</div>
	</header>
	<div class="boxx over-flow">
	<ul class="photos over-flow">
		<?php 
			foreach ($rowlist as $key => $value) 
				{ 
		 ?>
		<li >
			<a href="3.1detail.php?id=<?php echo $value['id'] ?>"> <img src= <?php echo $value['imgurl']; ?>></a>
			<a href="3.1detail.php?id=<?php echo $value['id'] ?>"> <?php echo $value['title']?></a>
		</li>
	<?php } ?>
	<div class="clear"></div>
	</ul>
	</div>
		<div class="a over-flow"style="width: 800px; text-align: center;margin: auto;margin-top:50px;">
		     <?php 
		     if ($page<=6) 
		     {
		     	for ($i=1; $i < 11; $i++) 
		     	{ 
		     		echo "<a href='?page=$i'>$i</a>";
		     	}
		     }
		     if ($page>6 && $page<$pages-5) 
		     {
		     	$start = $page-4;
		     	$end = $page+5;
		     	for ($i=$start; $i <= $end ; $i++) 
		     	{ 
		     		echo "<a href='?page=$i'>$i</a>";
		     	}
		     }
		     if ($page>=$pages-5) 
		     {
		     	$end =$pages;
		     	$start =$pages-9;
		     	for ($i=$start; $i <=$end ; $i++) 
		     	{ 
		     		echo "<a href='?page=$i'>$i</a>";
		     	}
		     }
		     if ($page<$pages) 
		     {
		     	$next =$page+1;
		     }
		     else{
		     	$next =$page;
		     }
		      ?>
		      <a href="?page=<?php echo $next?>">次のページ＞＞</a>
		</div>



 </body>
 </html>