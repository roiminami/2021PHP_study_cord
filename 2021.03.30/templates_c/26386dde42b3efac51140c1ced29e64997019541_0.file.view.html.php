<?php
/* Smarty version 3.1.39, created on 2021-04-04 12:41:59
  from 'C:\study\2021program\2021.03.30\view\view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60694397851cb5_98304406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26386dde42b3efac51140c1ced29e64997019541' => 
    array (
      0 => 'C:\\study\\2021program\\2021.03.30\\view\\view.html',
      1 => 1617511260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60694397851cb5_98304406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\study\\2021program\\2021.03.30\\smarty-master\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
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

	<?php echo $_SERVER['SERVER_NAME'];?>

	<?php echo (defined('db') ? constant('db') : null);?>

	<?php echo (defined('PHP_INT_MAX') ? constant('PHP_INT_MAX') : null);?>

	PHP时间戳：<?php echo time();?>
<br>
	smarty时间戳:<?php echo time();?>
<br>
	PHP时间戳格式化:<?php echo date('Y-m-d H;h:s');?>
<br>
	smarty时间戳格式化:<?php echo smarty_modifier_date_format(time(),'Y-m-d H;h:s');?>
<br>
	<!--视图端先加载视图文件--><?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "config.conf", $_GET['lan'], 0);
?>

	<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'a');?>

	<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'b');?>

	<?php echo $_smarty_tpl->smarty->ext->configload->_getConfigVariable($_smarty_tpl, 'a');?>

	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
	<br><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'myitem', false, 'mykey');
$_smarty_tpl->tpl_vars['myitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mykey']->value => $_smarty_tpl->tpl_vars['myitem']->value) {
$_smarty_tpl->tpl_vars['myitem']->do_else = false;
?>
	<br><?php echo $_smarty_tpl->tpl_vars['myitem']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'value2', false, 'key');
$_smarty_tpl->tpl_vars['value2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->do_else = false;
?>
	<br><?php echo $_smarty_tpl->tpl_vars['value2']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'myitem', false, 'mykey');
$_smarty_tpl->tpl_vars['myitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mykey']->value => $_smarty_tpl->tpl_vars['myitem']->value) {
$_smarty_tpl->tpl_vars['myitem']->do_else = false;
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myitem']->value, 'item2', false, 'key2');
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key2']->value => $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
	<?php echo $_smarty_tpl->tpl_vars['item2']->value;?>

	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<hr>
	<table cellpadding="5px" border="1px solid black"  >
		
		<tr>
			<th>编号</th>
			<th>姓名</th>
		</tr>
		
		<tr>
			
			<td></td>
		</tr>


	</table>

</body>
</html>
<?php }
}
