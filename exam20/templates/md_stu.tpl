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
     <input type="hidden" name="oldxh" value="<{$stu.xh}>"/><!--把学号放在隐藏区域，万一修改了学号还可以知道原来的学号是什么-->
	学号:<input type="text"  name="xh" value="<{$stu.xh}>"/><br/>
    姓名:<input type="text" name="xm" value="<{$stu.xm}>"/><br/>
    性别:<input type="radio" value="0" name="sex"  <{if $stu.sex==0}>checked="checked"<{/if}>/>男&nbsp;
        <input type="radio" value="1" name="sex"  <{if $stu.sex==1}>checked="checked"<{/if}>/>女 <br/>
    班级:<input type="text" name="bj" value="<{$stu.s_class}>"/><br/>
    <input type="submit" name="sub" value="确定"/>
</form>
</div>
</body>
</html>
