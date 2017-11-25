<?php /* Smarty version 3.1.27, created on 2017-11-19 13:31:10
         compiled from "D:\wamp\www\exam17\templates\exam17-2.html" */ ?>
<?php
/*%%SmartyHeaderCode:48955a11879ea1f954_45863063%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e17609ea6a8c2f9b61ac63b381e51c7de9a2f108' => 
    array (
      0 => 'D:\\wamp\\www\\exam17\\templates\\exam17-2.html',
      1 => 1511098267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48955a11879ea1f954_45863063',
  'variables' => 
  array (
    'ary' => 0,
    'ha' => 0,
    'sz' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a11879ea808c3_61259880',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a11879ea808c3_61259880')) {
function content_5a11879ea808c3_61259880 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '48955a11879ea1f954_45863063';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
 <?php
$_from = $_smarty_tpl->tpl_vars['ary']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sz'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sz']->_loop = false;
$_smarty_tpl->tpl_vars['ha'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['ha']->value => $_smarty_tpl->tpl_vars['sz']->value) {
$_smarty_tpl->tpl_vars['sz']->_loop = true;
$foreach_sz_Sav = $_smarty_tpl->tpl_vars['sz'];
?>
    
     <?php echo $_smarty_tpl->tpl_vars['ha']->value;?>
::<?php echo $_smarty_tpl->tpl_vars['sz']->value;?>
<br/>
 
 
 <?php
$_smarty_tpl->tpl_vars['sz'] = $foreach_sz_Sav;
}
?>
</body>
</html><?php }
}
?>