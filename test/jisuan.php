<?php
	header("Content-type:text/html;charset=utf-8");
	include_once("calc.class.php");
	if(isset($_GET['sub'])){
	$js = new calc();
	$s1 = $_GET['s1'];
	$s2 = $_GET['s2'];
	$fh = $_GET['fh'];
	
	
	echo '计算结果为：'.$js->szys($s1,$s2,$fh);
	}else {
		include_once("calc.class.php");
		$js = new calc();
			$k1 = $_GET['k1'];
			$k2 = $_GET['k2'];
			//$sub1 = $_GET['sub1'];
			echo '计算结果为：'.$js->mj($k1,$k2);
		}
	
?>