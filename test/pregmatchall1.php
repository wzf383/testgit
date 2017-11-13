<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>preg_match_all匹配函数例子</title>
</head>

<body>
<?php
   
	/**
	读取文本文件 readme.txt 
	看看里面有几个英文单词
	**/	
	$mode = '/[A-Za-z]+/';
     // $mode = '/_/';
     
	
//$mode ='/[\x{4e00}-\x{9fa5}]/u';
	$str = file_get_contents("readme.txt");	
	if(preg_match_all($mode,$str,$arr)){
		echo '英文单词'.preg_match_all($mode,$str,$arr).'个<br/>';  //教材p149页，倒数第9行代码也是用此方法得知共有几次匹配成功
		echo '下面是文档中出现的英文单词';
		//echo var_dump($arr);
		$ha=$arr[0]; 
		foreach ($ha as $v){
         echo $v."<br/>";
         //echo $arr[$arr[0]];
}
	}
	
	else{
		echo '没有英文单词'; 
	}
?>
</body>
</html>