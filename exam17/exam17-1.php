<?php
	include_once("init.inc.php");
	$ary = array("one1","two2","three3","four","five");
	$smarty->assign("ary",$ary);
	$smarty->display("exam17-1.html");
?>