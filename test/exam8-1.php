<?php
	header("Content-type:text/html;charset=utf-8");
	require_once("Jpgraph/jpgraph.php");
	require_once("Jpgraph/jpgraph_bar.php");
	$gp = new Graph(600,400);
	//$gp->SetScale("intint");    //设置坐标轴的类型。x轴是int,y轴也是
	//$gp->SetScale("linlin");
	$gp->SetScale("textlin");
	//$datax = array(10,30,20,60,70);
	$datax = array('one','two','three','four','five');  //x轴的数据，是一个数组  
	
	$datay = array(40,100,50,40,90);
	$datay1 = array(30,90,53,40,90);
	$bar = new BarPlot($datay);   //创建一个柱形图对象
	$bar1 = new BarPlot($datay1);
	$gp->xaxis->SetTickLabels($datax); //把x轴坐标设置为文本模式
	$gp->Add($bar);     //把把柱形图添加到图表中 
	$gp->Add($bar1);
	$gp->Stroke();
?>