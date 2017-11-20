<?php
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_GET['xh1'])){
		include("conn.php");
		include("init.inc.php");
		$xh1 = $_GET['xh1'];
		$sql = "delete  from tb_stuinf where xh='$xh1'";
		
		 if($r = mysql_query($sql)){
			
			echo '<script>alert("删除成功");location.href="sy20.php";</script>';
			
			
		} 
		
		
   	}else{
		echo '<script>alert("删除失败");location.href="sy20.php";</script>';
	}
?>