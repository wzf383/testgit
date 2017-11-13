<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>日期格式匹配</title>
</head>

<body>
<?php
    //日期时间格式判断是否正确的函数
	/**
	规则：
	1、年份必须是4位
	2、年、月、日之间的两个分隔符必须一致，而且只能为-/中的一个
	3、日期、月份都是两位数字
	**/

	//$mode1='/(\d{4}\d{2})([-\/])\d{2}\\1\d{2}/';
	$mode='/^\d{4}([-\/])\d{2}\\1\d{2}$/';
	$str = "1998/11/11";
	if(preg_match($mode,$str,$arr)){
		echo '日期格式正确'.$arr[0];
		var_dump($arr);
	}else{
		echo '日期格式不正确'; 
	}
?>
</body>
</html>