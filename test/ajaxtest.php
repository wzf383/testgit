<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ajax示例1</title>
<script>
  function show(){
	  var xmlhttp = null ;
	  try{
		  xmlhttp = new window.XMLHttpRequest();
	  }catch(e){
		  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  //上面是声明XMLHttpRequest的对象。其中ActiveXObject是为了兼容低版本的ie
	  var sel = document.getElementById('sel').value;    //获取文本框的内容
	  xmlhttp.open("GET","ajaxtestdo.php?sel="+sel,true); //设置 xmlhttp对象的发送方式为get,发送地址，true是异步发送
	  xmlhttp.onreadystatechange=function(){           //如果状态发生改变
		  if(xmlhttp.readyState==4 && xmlhttp.status==200){   //如果是请求已完成，并且响应已就绪
			  document.getElementById('con').innerHhTML = xmlhttp.responseText;  //改写相应id的div里面的内容为服务器发过来的字符串：xmlhttp.responseText
			   xmlhttp = null;  //使用完成后，注销对象，释放内存
		  }
	  }
	  xmlhttp.send();
	 
	  
  }

	

</script>
</head>

<body>
<?php
     
	
	header("content-type:text/html;charset=utf-8");
	$conn = mysql_connect("localhost","root","") or die("连接服务器失败");
	mysql_select_db("db_test12");
	mysql_query("set names utf8");
	$sql = 'select distinct(km) from tb_grade';
	$r = mysql_query($sql);
	
?>
<form >
  
  <select name="sel" id="sel">
      <?php
	  		while($row = mysql_fetch_array($r)){
				echo '<option name="'.$row['km'].'" >';//5
				
				echo $row['km'];
				
				
				//<input type="hidden" name="$row['km']"/>
				echo '</option>';
				
				
			}
			
	  ?>
    		
    </select>
       
  <input type="button" value="确定" name="btn" onclick="show()"/>  
</form>
<div id="con" >这里显示的输入的内容：</div>

</body>
</html>