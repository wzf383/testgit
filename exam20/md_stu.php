<?php
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_GET['xh'])){
		include("conn.php");
		include("init.inc.php");
		$xh = $_GET['xh'];
		$sql = "select * from tb_stuinf where xh='$xh'";
		$r = mysql_query($sql);		
		if($row = mysql_fetch_array($r)){
			$smarty->assign("stu",$row);
		    $smarty->display("md_stu.tpl");
		}
		
		
	}else{
		echo '<script>alert("请先选择要修改的记录");location.href="sy20.php";</script>';
	}
?>