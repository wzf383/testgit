<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成绩查询</title>
</head>

<body>
<?php
     
	include('conn.php');
	$sql = 'select distinct(km) from tb_grade';
	$r = mysql_query($sql);
	
?>
<form action="lx3do.php" method="post">
    请选择要查询成绩的科目：
	<select name="sel" >
      <?php
	  		while($row = mysql_fetch_array($r)){
				echo '<option name="'.$row['km'].'" >';//5
				
				echo $row['km'];
				
				
				//<input type="hidden" name="$row['km']"/>
				echo '</option>';
				
				
			}
			
	  ?>
    		
    </select>
       
    <input type="submit" value="查询" name="sub"/>

</form>
</body>
</html>