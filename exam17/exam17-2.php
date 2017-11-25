<?php
	include_once("init.inc.php");
	$ary = array("第一个值"=>"one","第二个值"=>"two","three","four","five");
	$smarty->assign("ary",$ary);
	$smarty->display("exam17-2.html");
?>