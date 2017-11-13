<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>二次检索</title>
</head>
<script >
	function showstu(){
		var xmlhttp=new window.XMLHttpRequest();
		var bj = document.getElementById("bj").value;
		xmlhttp.open("GET","showstu.php?bj="+bj,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("tbl").innerHTML = xmlhttp.responseText;
				xmlhttp = null;
			}
		}
	}
	
	function show(){
		
	}
	
	
</script>

<body>
请选择班级：
<select name="bj" id="bj" onchange="showstu()">
<option value="">没有选择班级</option>
<?php
	include_once("conn.php");
	$sql = 'select distinct s_class from tb_stuinf';
	mysql_query($sql);
	$r = mysql_query($sql);
	while($row = mysql_fetch_array($r)){
		echo "<option value='$row[0]'>$row[0]</option>";
	}
?>
</select>
<div id="tbl">
</div>

</body>
</html>