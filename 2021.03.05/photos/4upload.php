<?php 
	session_start();
	if (empty($_SESSION['admin'])) 
	{
		echo "まず、登録しなさい！";
		header("refresh:3;url='1login.php'");
		die();
	}
	$_SESSION['token']=uniqid();
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
 </head>
 	<style>
 		html{background-color: #D2E9FD}
		body{background-color: white;margin: 0 auto;width: 1000px;height: 800px;
		}
 		header{background-color: #9DD7FF;text-align: center;padding-bottom: 40px;
			padding-top: 40px;border-bottom: 2px solid black}
		.title{font-size: 35px;font-weight:bold;}
		.title2{margin-top: 20px;font-weight:bold;}
		li{list-style-type: none;}

 	</style>
 <body>
 	<header>
		<div class="title">ログイン画面</div>
		<div class="title2">個人アルバムにログインしなさい</div>
	</header>
 	<form action="5uploadsave.php" method="post" enctype="multipart/form-data">
 		<table cellpadding="20px" style="font-size: 20px; margin: auto;margin-top: 30px;margin-bottom: 30px;border: 2px solid black;" >
 			<tr>
 				<td>写真タイトル：</td>
 				<td><input required oninvalid="setCustomValidity('入力しなさい')" oninput="setCustomValidity('')" type="text" name="title"></td>
 			</tr>
 			<tr>
 				<td colspan="2">
 					<input  type="button" value="ファイル" onclick="javascript:$('input[name=\'fileName\']').click();"  class=" text"/>
   				<input name="file" placeholder="&nbsp;&nbsp;ファイルを選択しなさい！" style="border: none;" readonly onclick="javascript:$('input[name=\'fileName\']').click();"/>
   				<!input type="file" id="fileName" name="fileName" style="display: none;" onchange="javascript:$('input[name=\'file\']').val(this.files[0].name);" />
   				<input type="file" id="fileName" name="fileName" style="display: none;" onchange="javascript:$('input[name=\'file\']').val(value);$('input[name=\'file\']').prop('size',this.value.length+6);" />
 				</td>
 			</tr>
 			<tr>
 				<td style="vertical-align: top;"　>写真内容：</td>
 				<td><textarea required oninvalid="setCustomValidity('入力しなさい')" oninput="setCustomValidity('')" name="intro" cols="25" rows="8"></textarea></td>
 				<td>
 				</td>
			</td>
 			</tr>
 		</table>
 		<div align="center">
 		<input  style="width: 200px;  font-size: 30px;color: #056856;" type="submit" name="" value="提出">
 		</div>
 		<input type="hidden" name="token" value=
					<?php  echo $_SESSION['token']; ?>>

 	</form>
 </body>

 </html>
 