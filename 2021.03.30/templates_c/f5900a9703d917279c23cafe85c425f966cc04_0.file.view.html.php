<?php
/* Smarty version 3.1.39, created on 2021-04-01 13:06:09
  from 'C:\study\2021program\2021.03.30\view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606554c1aab874_02254395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5900a9703d917279d5c23cafe85c425f966cc04' => 
    array (
      0 => 'C:\\study\\2021program\\2021.03.30\\view.html',
      1 => 1617253569,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606554c1aab874_02254395 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>smarty模板引擎</title>
	<style>
		body{background-color: #99ff00;}
	</style>
</head>
<body>
	姓名:<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
  
	<br>
	年龄：<?php echo $_smarty_tpl->tpl_vars['age']->value;?>

</body>
</html>
<?php }
}
