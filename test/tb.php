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
  
 $gp->title->set(iconv("GBK","gb2312","ˮ��һ�·�����"));
 $gp->title->SetFont(FF_SIMSUN, FS_NORMAL,15);   //����������
 
 //$gp->xaxis->title->set(iconv("GBK","gb2312","ˮ������"));
 //$gp->yaxis->title->set("����(����)");
 $gp->SetUserFont1("xft.ttf");//�����������壬������Զ�������
 $gp->xaxis->title->setFont(FF_USERFONT1,FS_NORMAL,12);
 $gp->xaxis->title->set("����X��");
 
  /*
  $gp->title->set("������");

  $gp->SetUserFont1("xft.ttf");
  $gp->title->SetFont(FF_USERFONT1,FS_NORMAL,20);
*/
  $gp->Stroke();