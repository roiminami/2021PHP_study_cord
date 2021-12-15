<?php 
	session_start();
	if (empty($_SESSION['username'])) 
	{
		header("location:./login.php");
		die();
	} 
	$_SESSION['token'] = uniqid();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 	<style type="text/css">
 	.css1{text-align: center;border-bottom: 3px solid black;background: #CFE2FC;
		}
		.css1-1{font-size: 40px;padding: 30px}
		.css1-2{margin-bottom: 30px;}
		.css2{margin: auto; margin-top: 40px;}
		</style>
		
 </head>
 <body>
 	<div class="css1">
		<div class="css1-1">用户登录</div>
		<div class="css1-2">欢迎光临，请先登录!</div>
	</div>
	<form action="uploadsave.php" method="POST" enctype="multipart/form-data">
		<table class="css2" cellpadding="20px">
			<tr>
				<td>照片标题:</td>
				<td><input style="width: 300px;" type="text" name="photo_title"></td>
			</tr>
			<tr>
				<td >上传照片:</td>
				<td><input type="file" name="upload"></td>
			</tr>
			<tr>
				<td >照片描述:</td>
				<td><textarea name="intro"  rows="5" cols="40"></textarea></td>
			</tr>
			<tr align="right" >
				<td colspan="2" ><input type="submit" value="提交" style="margin-right: 20px;"><input style="margin-right: 20px;" type="reset">
				<input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?>">
				</td>
		
			</tr>
		</table>

	</form>
 </body>
 </html>