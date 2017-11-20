<?php
    header("Content-type:text/html;charset=utf-8");
   	if(isset($_POST['sub'])){
		include("conn.php");
		include("init.inc.php");
		$xh = $_POST['xh'];
		
		$xm = $_POST['xm'];
		
		$sex = $_POST['sex'];
		$bj = $_POST['bj'];
		$sql = "insert into tb_stuinf values('$xh','$xm','$sex','$bj')";
	  //var_dump($sql);
		 if($r=mysql_query($sql)){
			echo '<script>alert("添加成功");location.href="sy20.php";</script>';
		    
		}else{
			echo '<script>alert("添加失败，可能存在同名的学号");history.go(-1);</script>';
		}
		 
		
	}else{
		echo '<script>alert("请先选择要添加的记录");location.href="sy20.php";</script>';
	}
?>