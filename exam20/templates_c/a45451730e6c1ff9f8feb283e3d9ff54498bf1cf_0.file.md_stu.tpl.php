<?php /* Smarty version 3.1.27, created on 2017-11-19 15:05:25
         compiled from "D:\wamp\www\exam20\templates\md_stu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:286905a119db5450cf0_93927670%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a45451730e6c1ff9f8feb283e3d9ff54498bf1cf' => 
    array (
      0 => 'D:\\wamp\\www\\exam20\\templates\\md_stu.tpl',
      1 => 1447689600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286905a119db5450cf0_93927670',
  'variables' => 
  array (
    'stu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a119db54f1f47_62976234',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a119db54f1f47_62976234')) {
function content_5a119db54f1f47_62976234 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '286905a119db5450cf0_93927670';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>显示学生信息</title>
</head>

<body>
<h1 align="center">修改学生信息</h1>
<div style="margin:0 auto; width:300px; margin-top:20px; border:inset #000 medium; padding:20px;">
<form action="md_studo.php" method="post" >
     <input type="hidden" name="oldxh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/><!--把学号放在隐藏区域，万一修改了学号还可以知道原来的学号是什么-->
	学号:<input type="text"  name="xh" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xh'];?>
"/><br/>
    姓名:<input type="text" name="xm" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['xm'];?>
"/><br/>
    性别:<input type="radio" value="0" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 0) {?>checked="checked"<?php }?>/>男&nbsp;
        <input type="radio" value="1" name="sex"  <?php if ($_smarty_tpl->tpl_vars['stu']->value['sex'] == 1) {?>checked="checked"<?php }?>/>女 <br/>
    班级:<input type="text" name="bj" value="<?php echo $_smarty_tpl->tpl_vars['stu']->value['s_class'];?>
"/><br/>
    <input type="submit" name="sub" value="确定"/>
</form>
</div>
</body>
</html>
<?php }
}
?>