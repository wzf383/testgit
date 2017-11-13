<?php
	header("Content-type:text/html;charset=utf-8");
	
	$sel = $_GET['sel'];	
	//echo '这里显示的是文本框的内容：'.$tt;
	$conn = mysql_connect("localhost","root","") or die("连接服务器失败");
	mysql_select_db("db_test12");
	mysql_query("set names utf8");
	$sql = "select * from tb_grade where km='$sel'";
	$r = mysql_query($sql);
	echo "<table border='1'>";
	
	
	while($row = mysql_fetch_array($r)){
	 echo "<tr>";
	 echo "<td>".$row['xh']."</td>";
	 echo "<td>".$row['cj']."</td>";
	 echo "</tr>";
	 
	}
	echo "</table>";
	
	?>