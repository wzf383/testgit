<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
</head>

<body>
<?php
	if(isset($_POST['username'])){    
		$username = $_POST['username'];
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("db_test");
		mysql_query('set names utf8');
		if(isset($_POST['ah'])){    //如果按了修改按钮
			$sl = $_POST['ah'];     //接收传过来的数组，用户选择了那几个爱好
			$slstr = implode(",",$s1); //(1)请补全代码;  //给数组每个元素加上分割符号，组成一个字符串
			$sql = "update tb_sluser set sl = '$slstr' where username = '$username'";
			if($r = mysql_query($sql)){
				echo "<script>alert('修改成功');</script>";
			}
		}
		$sql = "select * from tb_sluser where username = '$username'";
		
		$r = mysql_query($sql);
		
		if($row=mysql_fetch_array($r)){
			echo "<h2>请在下面选取你爱好的运动</h2>";
			$ah = array('足球'=>'足球','篮球'=>'篮球','羽毛球'=>'羽毛球','乒乓球'=>'乒乓球');
			$sl = explode(',',$row['sl']);  //把数据库里面记录用户选择爱好信息的字段提取出来，并且根据分隔符，分割成一个数组
			
			echo '<form action="" method="post">';
			echo '<input  name="username" type="hidden" value="'.$username.'"/>';
			echo '<select name="ah[]" multiple="multiple">';
			foreach($ah as $k=>$v){    // 循环遍历$ah数组，把爱好选项以列表菜单的形式显示出来
				echo '<option value="'.$v.'"';
				if (in_array($ah)){         //如果此项用户有选择，那么就把此项选上，用in_array()函数来判断，用选了哪项，在$sl里有记录(2)请补全代码
					//(3)请补全代码
					
					echo haha;
				}
				echo '/>';
				echo $k.'</option>';
				
			}
			echo '</select><br/>';
			echo '<input type="submit" value="修改" name="sub"/>';
			echo '</form>';
			echo '</form>';
			echo '<br/><a href="lx4-1.php">返回</a>';
			
		}else{
			echo '<script>alert("此用户不存在，请重新输入");location="lx4-1.php";</script>';
		}
	}else{
		echo '<script>alert("请先输入用户名登录");location="lx4-1.php";</script>';
	}
?>

</body>
</html>