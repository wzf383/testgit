<?php
	header("Content-type:text/html;charset=utf-8");
	require_once("Jpgraph/jpgraph.php");
	require_once("Jpgraph/jpgraph_bar.php");
	require_once("Jpgraph/jpgraph_line.php");
	$gp = new Graph(600,300);
	$gp->img->SetMargin(100,50,50,50);   //设置统计图边距
	$gp->SetScale("textlin",10,80);  //设置y轴最大刻度为80，最小为10
	$gp->yaxis->scale->ticks->set(30);
	$datay = array(20,12,50,14);
	$datax = array(5,2,8,10);
	$bar = new BarPlot($datay);
	$lin = new LinePlot($datay);
	$gp->xaxis->SetTickLabels($datax);
		
	$gp->Add($bar);
	$gp->Add($lin);

    $bar->value->show();
	
	$gp->title->set(iconv("utf-8","gb2312","测试图表例子"));
	$gp->title->SetFont(FF_SIMSUN, FS_NORMAL,15);   //设置宋体字，第二个参数FS_NORMAL表示宋体，FS_BOLD表示黑体
	$gp->SetUserFont1("xft.ttf");//设置中文字体，这个是自定义字体
	$gp->xaxis->title->setFont(FF_USERFONT1,FS_NORMAL,12);
	$gp->xaxis->title->set("我是X轴");
	$gp->SetUserFont2("xft.ttf");//设置中文字体，这个是自定义字体
	$gp->yaxis->title->setFont(FF_USERFONT2,FS_NORMAL,15);
	$gp->yaxis->title->set("我是y轴");
	$gp->Stroke();
	
?>