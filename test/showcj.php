<?php

if(isset($_GET['xh'])){
	include_once("conn.php");
	$xh=$_GET['xh'];
	$sql="select * from tb_grade where xh='$xh'";
	 
	$r=mysql_query($sql);
	
     echo "<hr/>";
	echo "<table border='1' >";
	while($row=mysql_fetch_array($r)){


		
		echo "<td>".$row['km']."</td>";
		echo "<td>".$row['cj']."</td>";

		echo "</tr>";
	}
	echo "</table>";
}