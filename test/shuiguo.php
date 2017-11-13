<?php


 header("content-type:text/html;charset=utf-8");
 
  require_once("Jpgraph/jpgraph.php");
  require_once ("Jpgraph/jpgraph_bar.php");
  
  $gp=new Graph(800,600);
  $gp->SetScale("textlin",0,80);
  $gp->yaxis->scale->ticks->set(10);
  
  
  $x=array("Watermelon","apple","pear","banana","Strawberry");


  $y=array(80,78,50,66,45);
  
  
  $bar=new BarPlot($y);
 
  $gp->xaxis->SetTickLabels($x);
 
  $gp->Add($bar);
  $bar->value->show();
  
 $gp->title->set(iconv("utf-8","gb2312","水果一月份销量"));
 $gp->title->SetFont(FF_SIMSUN, FS_NORMAL,15);   //设置宋体字
 
 //$gp->xaxis->title->set(iconv("GBK","gb2312","水果名称"));
 //$gp->yaxis->title->set("数量(公斤)");
 /*
 $gp->SetUserFont1("xft.ttf");//设置中文字体，这个是自定义字体
 $gp->xaxis->title->setFont(FF_USERFONT1,FS_NORMAL,12);
 $gp->xaxis->title->set("水果名称");
 
 $gp->SetUserFont1("xft.ttf");//设置中文字体，这个是自定义字体
 $gp->yaxis->title->setFont(FF_USERFONT1,FS_NORMAL,12);
 $gp->yaxis->title->set("数量(公斤)");
 */
 $gp->xaxis->title->set(iconv("utf-8","gb2312","水果名称"));  //x轴标题内容
 $gp->xaxis->title->setFont(FF_SIMSUN,FS_BOLD,10);
 $gp->yaxis->title->set(iconv("utf-8","gb2312","数量(公斤)"));     //y轴标题内容
 $gp->yaxis->title->setFont(FF_SIMSUN,FS_BOLD,10);
 
  /*
  $gp->title->set("看看的");

  $gp->SetUserFont1("xft.ttf");
  $gp->title->SetFont(FF_USERFONT1,FS_NORMAL,20);
*/
  $gp->Stroke();