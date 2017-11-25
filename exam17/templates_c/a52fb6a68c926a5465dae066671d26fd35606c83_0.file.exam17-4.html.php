<?php /* Smarty version 3.1.27, created on 2017-11-25 04:19:39
         compiled from "D:\wamp\www\exam17\templates\exam17-4.html" */ ?>
<?php
/*%%SmartyHeaderCode:131765a18ef5ba73356_43568476%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a52fb6a68c926a5465dae066671d26fd35606c83' => 
    array (
      0 => 'D:\\wamp\\www\\exam17\\templates\\exam17-4.html',
      1 => 1511583565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131765a18ef5ba73356_43568476',
  'variables' => 
  array (
    'ary' => 0,
    'ha' => 0,
    'sz' => 0,
    'sz1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a18ef5bad69a1_13932600',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a18ef5bad69a1_13932600')) {
function content_5a18ef5bad69a1_13932600 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '131765a18ef5ba73356_43568476';
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
:
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
 
 <?php
$_smarty_tpl->tpl_vars['sz'] = $foreach_sz_Sav;
}
?>
 
</body>
</html><?php }
}
?>