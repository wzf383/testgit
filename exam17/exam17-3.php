<?php
	include_once("init.inc.php");
	$stu = array(array("xh"=>"120101","xm"=>"王明","bj"=>"1201"),
	             array("xh"=>"120201","xm"=>"李达","bj"=>"1202"),
				 array("xh"=>"120301","xm"=>"张三","bj"=>"1203"),
				 );
	$smarty->assign("ary",$stu);
	$smarty->display("exam17-3.html");
?>