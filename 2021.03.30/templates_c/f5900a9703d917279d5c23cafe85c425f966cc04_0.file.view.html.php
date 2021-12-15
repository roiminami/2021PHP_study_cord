<?php
/* Smarty version 3.1.39, created on 2021-04-05 15:07:43
  from 'C:\study\2021program\2021.03.30\view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606ab73f089182_31065679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5900a9703d917279d5c23cafe85c425f966cc04' => 
    array (
      0 => 'C:\\study\\2021program\\2021.03.30\\view.html',
      1 => 1617606462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606ab73f089182_31065679 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	foreach循环
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
	<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
<br>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	section一维循环
	<?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
<br>
	<?php
}
}
?>


	section二维循环
	<table>
	<?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
	<tr>
		<?php
$__section_p_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_p_2_total = $__section_p_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_2_total !== 0) {
for ($__section_p_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_2_iteration <= $__section_p_2_total; $__section_p_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
				<td><?php echo $_smarty_tpl->tpl_vars['arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)];?>
</td>
		<?php
}
}
?>
	</tr>
	<?php
}
}
?>
	</table>
	<?php if ($_GET['age'] > 18) {?>
	你的年龄是<?php echo $_GET['age'];?>
可以当兵
	<?php } else { ?>
	你的年龄是<?php echo $_GET['age'];?>
不可以当兵
	<?php }?>
	<form action="./controller.php" method="get">
		请输入您的年龄：<input type="text" name="age">
	</form>
<table border="1" width="500">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr1']->value, 'key');
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['key']->value%3 == 0) {?>
	<tr bgcolor="red" >
		<?php } else { ?>
		<tr  >
	<?php }?>
		<td> <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 </td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['title']->value, 'UTF-8');?>

	<?php echo mb_strtolower($_smarty_tpl->tpl_vars['title']->value, 'UTF-8');?>



</table>
</body>
</html><?php }
}
