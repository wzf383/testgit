<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>preg_replace例子</title>
</head>

<body>
<?php
   /**
   preg_replace ( mixed pattern, mixed replacement, mixed subject [, int limit] )
   第一个参数 pattern：替换的规则，就是如何替换，这个是正则表达式
   第二个参数 replacementr：对于符合规则的子串，要替换成什么内容
   第三个参数 subject：要进行替换操作的字符串
   
   **/
/*
	$pat='/:\d/';
	$rpl1=':[请填写价格]';
	
	$sub = '铅笔的单价:1元  钢笔的单价:5元  橡皮的单价:6元';
	
	echo preg_replace($pat,$rpl1,$sub);
	*/
	$pat= '/[A-Za-z]+/';
	$rpl1='_';
	
	$sub = file_get_contents("readme.txt");	
	
	echo preg_replace($pat,$rpl1,$sub);
	
?>
</body>
</html>