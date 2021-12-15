<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>提交表单</title>
</head>
<body>
	<form action="session.php" method="post">
		<table>
			<tr>
				<td>你的名字:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>你的性别:</td>
				<td>
					男<input type="checkbox" name="sex" value="man">|
					女<input type="checkbox" name="sex" value="woman">
				</td>
				<td>
					<input type="submit" name="登录">
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>