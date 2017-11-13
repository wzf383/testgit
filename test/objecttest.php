<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>面向对象例子</title>
</head>

<body>
<?php
	class person{
		public $sex;
		public $age;
		public $name;		
		function __construct($name){
			$this->name=$name;		
		}
		
		function __destruct(){
			echo '我要走了';
		}
		function introduce(){
			echo 'my name is '.$this->name;
		}
	}
	
	$p1 = new person('tom');
	$p1->introduce();
	$p1->sex='女';
	echo $p1->sex;
	//$p1= null;
	
	
?>
</body>
</html>