<?php 
	session_start();
	$_SESSION['token']=uniqid();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<style>
		html{background-color: #D2E9FD}
		body{background-color: white;margin: 0 auto;width: 1000px;height: 800px;
		}
		header{background-color: #9DD7FF;text-align: center;padding-bottom: 40px;
			padding-top: 40px;border-bottom: 2px solid black}
		.title{font-size: 35px;font-weight:bold;}
		.title2{margin-top: 20px;font-weight:bold;}
		table{margin:30px auto;border: 1px #909090 solid;font-size: 18px;color: blue;border-spacing: 30px;font-weight:bold;}
	</style>
</head>
<body>
	<header>
		<div class="title">ログイン画面</div>
		<div class="title2">個人アルバムにログインしなさい</div>
	</header>
	<form action="2loginsave.php" method="post">
		<table>
			<tr>
				<td>アカウント：</td>
				<td><input required oninvalid="setCustomValidity('入力しなさい')" oninput="setCustomValidity('')" type="text" name="admin"></td>
			</tr>
			<tr>
				<td>パスワード：</td>
				<td><input required oninvalid="setCustomValidity('入力しなさい')" oninput="setCustomValidity('')"　type="text" name="password"></td>
			</tr>
			<tr>
				<td>検証コード：</td>
				<td ><input required oninvalid="setCustomValidity('入力しなさい')" oninput="setCustomValidity('')" style="width: 80px;vertical-align:middle" type="text" name="certify">
					<img src="./1.1certify.php" style="vertical-align:middle" onclick="this.src='./1.1certify.php?'+Math.random()">
					
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input style="width: 220px;font-size: 20px; color: blue;" type="submit" value="ログイン">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input style="width: 220px;font-size: 20px; color: blue;" type="reset" value="reset">
				</td>
			</tr>
			<tr>
				<td >
					<input type="hidden" name="token" value=
					<?php  echo $_SESSION['token']; ?>>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>