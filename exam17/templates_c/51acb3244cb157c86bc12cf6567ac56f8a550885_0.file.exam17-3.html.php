<?php /* Smarty version 3.1.27, created on 2017-11-19 13:46:02
         compiled from "D:\wamp\www\exam17\templates\exam17-3.html" */ ?>
<?php
/*%%SmartyHeaderCode:203745a118b1a31e3a5_84657045%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51acb3244cb157c86bc12cf6567ac56f8a550885' => 
    array (
      0 => 'D:\\wamp\\www\\exam17\\templates\\exam17-3.html',
      1 => 1511099155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203745a118b1a31e3a5_84657045',
  'variables' => 
  array (
    'ary' => 0,
    'ha' => 0,
    'sz' => 0,
    'sz1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a118b1a4a2757_46567317',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a118b1a4a2757_46567317')) {
function content_5a118b1a4a2757_46567317 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '203745a118b1a31e3a5_84657045';
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
:<?php echo $_smarty_tpl->tpl_vars['sz']->value['xh'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['ha']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['sz']->value['xm'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['ha']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['sz']->value['bj'];?>
&nbsp;<br/>
 
 
 
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
</html><?php }
}
?>