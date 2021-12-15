<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js">
</script>
</head>
<body>
   <input type="button" value="ファイル" onclick="javascript:$('input[name=\'fileName\']').click();"  class=" text"/>
   <input name="file" value="ファイルを選択しなさい！" style="border: none;" readonly onclick="javascript:$('input[name=\'fileName\']').click();"/>
   <!input type="file" id="fileName" name="fileName" style="display: none;" onchange="javascript:$('input[name=\'file\']').val(this.files[0].name);" />
   <input type="file" id="fileName" name="fileName" style="display: none;" onchange="javascript:$('input[name=\'file\']').val(value);$('input[name=\'file\']').prop('size',this.value.length+6);" />
</body>
</html>