<?php
	header("content-type:text/html;charset=utf-8");   
	require_once "Jpgraph/jpgraph.php";
	require_once "Jpgraph/jpgraph_bar.php";
	
	
	$jp = new Graph(600,600);                   
	$dy  =array(80,73,89,85,92);                            //y轴数据
	$dx =array("C#","VB","VC","JAVA","ASP.NET");            //x轴数据
	
	$barplot = new BarPlot($dy);
	
	$jp->SetScale("textlin",10,100);                             //设置刻度类型
	
	$jp->xaxis->SetTickLabels($dx);                        //设置x轴的数据源
	$jp->SetMargin(80,10,20,50);                        //设置图像边距，左，右，上，下
	$jp->title->set(iconv("utf-8","gb2312","六月销售量"));    //图像标题
	$jp->xaxis->title->set(iconv("utf-8","gb2312","书名"));  //x轴标题内容
	$jp->yaxis->title->set(iconv("utf-8","gb2312","本"));     //y轴标题内容
	
	
	$jp->title->setFont(FF_SIMSUN,FS_BOLD,20);              //标题字体的设置
	$jp->xaxis->title->setFont(FF_SIMSUN,FS_BOLD,10);
	$jp->yaxis->title->setFont(FF_SIMSUN,FS_BOLD,10);
	$jp->yaxis->scale->ticks->set(20);
	
	


	$jp->Add($barplot);                                       
	$barplot->value->show();                                  //显示y值
	

	$jp->Stroke();
?>