<?php


 header("content-type:text/html;charset=utf-8");
 
  require_once("Jpgraph/jpgraph.php");
  require_once ("Jpgraph/jpgraph_bar.php");
  
  $gp=new Graph(800,600);
  $gp->SetScale("textlin");
  
  $x=array("Watermelon","apple","pear","banana","Strawberry");


  $y=array(80,78,50,66,45);
  
  
  $bar=new BarPlot($y);
 
  $gp->xaxis->SetTickLabels($x);
 
  $gp->Add($bar);
  $bar->value->show();
  
 $gp->title->set(iconv("GBK","gb2312","水果一月份销量"));
 $gp->title->SetFont(FF_SIMSUN, FS_NORMAL,15);   //设置宋体字
 
 //$gp->xaxis->title->set(iconv("GBK","gb2312","水果名称"));
 //$gp->yaxis->title->set("数量(公斤)");
 $gp->SetUserFont1("xft.ttf");//设置中文字体，这个是自定义字体
 $gp->xaxis->title->setFont(FF_USERFONT1,FS_NORMAL,12);
 $gp->xaxis->title->set("我是X轴");
 
  /*
  $gp->title->set("看看的");

  $gp->SetUserFont1("xft.ttf");
  $gp->title->SetFont(FF_USERFONT1,FS_NORMAL,20);
*/
  $gp->Stroke();