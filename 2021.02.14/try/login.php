<?php 
	session_start();
	$_SESSION['token'] = uniqid();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>登录页面</title>
	<style>
		.css1{text-align: center;border-bottom: 3px solid black;background: #CFE2FC;
		}
		.css1-1{font-size: 40px;padding: 30px}
		.css1-2{margin-bottom: 30px;}
		.css2{text-align: center;margin: auto;margin-top: 30px}
		.css2 tr >* { padding: 15px;}
	</style>
</head>
<body>
	<div class="css1">
		<div class="css1-1">用户登录</div>
		<div class="css1-2">欢迎光临，请先登录!</div>
	</div>
	 <form method="post" action="loginsave.php">
		<table width="400" class="css2">
			
			<tr>
				<td>用户名:</td>
				<td><input type="text" name="adminname"></td>
			</tr>
			<tr>
				<td>密 码:</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>验证码:</td>
				<td ><input type="text" name="certify" style="width:60px; margin-left: 30px;"> 
				<img style="height: 30px; float: right; margin-right: 50px;" src="./captcha.php"
				onclick="this.src='./captcha.php?'+Math.random()">
				</td>
			</tr>
			<tr >
				<td colspan="2" align="center"><input type="submit" value="登录">
				<input type="reset" value="重置">
			</td>
			</tr>
			<tr>
				<td><input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?>"
					></td>
			</tr>
		
		</table>
	</form>
</body>
</html>