<?php
	include_once("init.inc.php");
	$stu = array("蔬菜"=>array("白菜","西红柿"),
			"植物"=>array("白菜","西红柿"),
			"动物"=>array("白菜","西红柿"),
				 );
	$smarty->assign("ary",$stu);
	$smarty->display("exam17-4.html");
?>