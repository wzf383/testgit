﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>班级成绩</title>
</head>
<script >
	function showstu(){  //动态刷新学生信息表数据


		 //var xmlhttp = null ;
		 
		var xmlhttp=new window.XMLHttpRequest();
		  var bj = document.getElementById('bj').value; 	
		xmlhttp.open("GET","showstu.php?bj="+bj,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
              document.getElementById("tbl").innerHTML=xmlhttp.responseText;

			}
			}
		//xmlhttp.send();
		
	}
	
	function showcj(xh){  //动态刷新相应学生的成绩数据，xh是当前学生信息所在表格行的id

		var xmlhttp=new window.XMLHttpRequest();
		xmlhttp.open("GET","showcj.php?xh="+xh,true);
		xmlhttp.send();
		xmlhttp.onreadystatechange=function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				
                 document.getElementById("grade").innerHTML=xmlhttp.responseText;

			}
			}
		
	}
	
	
</script>

<body>
请选择班级：
<select name="bj" id="bj" onchange="showstu()">
<option>沒有選擇</option>
<?php
	include_once("conn.php");
	$sql = 'select distinct (s_class) from tb_stuinf';
	mysql_query($sql);
	$r = mysql_query($sql);
	while($row = mysql_fetch_array($r)){
		echo '<option>';//5

         echo $row['s_class'];


//<input type="hidden" name="$row['km']"/>
echo '</option>';
	}
?>
</select>
<div id="tbl"></div>
<div id="grade"><!--显示鼠标移到上面的学生的成绩-->
</div>
</body>
</html>