<?php /* Smarty version 3.1.27, created on 2017-11-19 13:16:54
         compiled from "D:\wamp\www\exam17\templates\exam17-2.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:240035a11844624e081_04989120%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b7d8f7a13164bd8e3608078c9a25fee8278eb33' => 
    array (
      0 => 'D:\\wamp\\www\\exam17\\templates\\exam17-2.tpl',
      1 => 1446912000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240035a11844624e081_04989120',
  'variables' => 
  array (
    'ary' => 0,
    'k' => 0,
    'sz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a1184462b5b37_61766064',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a1184462b5b37_61766064')) {
function content_5a1184462b5b37_61766064 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '240035a11844624e081_04989120';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>foreach遍历数组,显示键和值</title>
</head>

<body>
<?php
$_from = $_smarty_tpl->tpl_vars['ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sz'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sz']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['sz']->value) {
$_smarty_tpl->tpl_vars['sz']->_loop = true;
$foreach_sz_Sav = $_smarty_tpl->tpl_vars['sz'];
?>
	<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['sz']->value;?>
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