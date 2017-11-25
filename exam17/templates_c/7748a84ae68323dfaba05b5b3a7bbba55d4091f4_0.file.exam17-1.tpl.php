<?php /* Smarty version 3.1.27, created on 2017-11-19 13:14:42
         compiled from "D:\wamp\www\exam17\templates\exam17-1.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:95865a1183c2391f63_62977444%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7748a84ae68323dfaba05b5b3a7bbba55d4091f4' => 
    array (
      0 => 'D:\\wamp\\www\\exam17\\templates\\exam17-1.tpl',
      1 => 1446912000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95865a1183c2391f63_62977444',
  'variables' => 
  array (
    'ary' => 0,
    'sz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a1183c2438456_95427834',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a1183c2438456_95427834')) {
function content_5a1183c2438456_95427834 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '95865a1183c2391f63_62977444';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>foreach遍历数组</title>
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
	<?php echo $_smarty_tpl->tpl_vars['sz']->value;?>
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