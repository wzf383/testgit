<?php /* Smarty version 3.1.27, created on 2017-11-20 11:55:31
         compiled from "D:\wamp\www\exam20\templates\sy20.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:317005a12c2b3a188b7_58159670%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bcc735d4cf5db84889cf9ccc3e4093166497e31' => 
    array (
      0 => 'D:\\wamp\\www\\exam20\\templates\\sy20.tpl',
      1 => 1511178920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317005a12c2b3a188b7_58159670',
  'variables' => 
  array (
    'stu' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a12c2b3a812e5_37737435',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a12c2b3a812e5_37737435')) {
function content_5a12c2b3a812e5_37737435 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '317005a12c2b3a188b7_58159670';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息-课堂练习二</title>
</head>

<body>
<h1 align="center">学生信息表</h1>
   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="templates/add.html">添加学生</a>
<table border="1" style="border-collapse:collapse" align="center">
	<tr><td>学号</td><td>姓名</td><td>性别</td><td>班级</td><td>修改</td><td>删除</td></tr>
    
    <?php
$_from = $_smarty_tpl->tpl_vars['stu']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['s']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
$foreach_s_Sav = $_smarty_tpl->tpl_vars['s'];
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['s']->value['xh'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['s']->value['xm'];?>
</td>
        <td><?php if (($_smarty_tpl->tpl_vars['s']->value['sex'] == 0)) {?>男<?php } else { ?>女<?php }?></td>
        <td><?php echo $_smarty_tpl->tpl_vars['s']->value['s_class'];?>
</td>
        <td><a href="md_stu.php?xh=<?php echo $_smarty_tpl->tpl_vars['s']->value['xh'];?>
">修改</a></td>
        <td><a href="md_sanchu.php?xh1=<?php echo $_smarty_tpl->tpl_vars['s']->value['xh'];?>
">删除</a></td>
     </tr>
    <?php
$_smarty_tpl->tpl_vars['s'] = $foreach_s_Sav;
}
?>
    
</table>
</body>
</html>
<?php }
}
?>