<?php
  if(isset($_GET['bj'])){
  	include_once("conn.php");
  	$bj=$_GET['bj'];
  	$sql="select * from tb_stuinf where s_class='$bj'";
  	
  	$r=mysql_query($sql);
  	echo "<table border='1' >";
  	while($row=mysql_fetch_array($r)){
  		
  		
  		echo '<tr onMouseMove="showcj(\''.$row['xh'].'\')">';
  		echo "<td>".$row['xh']."</td>";
  		echo "<td>".$row['xm']."</td>";
  		
  		echo "</tr>";
  	}
  	echo "</table>";
  }