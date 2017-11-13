<?php
    //访问数据库，获取数据，生产图表例子
	//本例是查询每个学号的数学成绩，显示学号和其对应的数学成绩
	header("content-type:text/html;charset=utf-8");
	require_once("jpgraph/jpgraph.php");
	require_once("jpgraph/jpgraph_bar.php");
	
	$gp = new Graph(800,600);
	$gp->SetScale("textlin");
	
	mysql_connect("localhost","root","") or die("服务器连接失败");
	mysql_select_db("db_test8") or die("数据库不存在");
	mysql_query("set names utf8");
	
	$sql = "select * from tb_grade where km='数学'";
	$r = mysql_query($sql);
	while($row = mysql_fetch_array($r)){
		$x[] = $row['xh'];
		$y[] = $row['cj'];
	}
	$bar = new BarPlot($y);	;
	$gp->xaxis->SetTickLabels($x);
	$gp->Add($bar);
	$bar->value->show();
	$gp->Stroke();