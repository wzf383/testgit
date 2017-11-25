<?php /* Smarty version 3.1.27, created on 2017-11-19 13:17:07
         compiled from "D:\wamp\www\exam17\templates\exam17-3.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16005a1184530f3c09_25955319%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679f6247e6311e872856c93ee7b92ebb44df460f' => 
    array (
      0 => 'D:\\wamp\\www\\exam17\\templates\\exam17-3.tpl',
      1 => 1446912000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16005a1184530f3c09_25955319',
  'variables' => 
  array (
    'ary' => 0,
    'sz' => 0,
    'sz1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a11845316cab7_73368003',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a11845316cab7_73368003')) {
function content_5a11845316cab7_73368003 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16005a1184530f3c09_25955319';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>foreach遍历二维数组数组,显示学生信息</title>
</head>

<body>
<?php
$_from = $_smarty_tpl->tpl_vars['ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sz'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sz']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sz']->value) {
$_smarty_tpl->tpl_vars['sz']->_loop = true;
$foreach_sz_Sav = $_smarty_tpl->tpl_vars['sz'];
?>
	<?php echo $_smarty_tpl->tpl_vars['sz']->value['xh'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['sz']->value['xm'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['sz']->value['bj'];?>
<br/>
<?php
$_smarty_tpl->tpl_vars['sz'] = $foreach_sz_Sav;
}
?>
<hr/>
也可以用嵌套的方法遍历：<br/>
<?php
$_from = $_smarty_tpl->tpl_vars['ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sz'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sz']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sz']->value) {
$_smarty_tpl->tpl_vars['sz']->_loop = true;
$foreach_sz_Sav = $_smarty_tpl->tpl_vars['sz'];
?>
	<?php
$_from = $_smarty_tpl->tpl_vars['sz']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sz1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sz1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sz1']->value) {
$_smarty_tpl->tpl_vars['sz1']->_loop = true;
$foreach_sz1_Sav = $_smarty_tpl->tpl_vars['sz1'];
?>
    	<?php echo $_smarty_tpl->tpl_vars['sz1']->value;?>
&nbsp;
    <?php
$_smarty_tpl->tpl_vars['sz1'] = $foreach_sz1_Sav;
}
?>
    <br/>
<?php
$_smarty_tpl->tpl_vars['sz'] = $foreach_sz_Sav;
}
?>

</body>
</html>
<?php }
}
?>