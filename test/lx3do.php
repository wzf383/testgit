<?php

include('conn.php');
 header("content-type:text/html;charset=utf-8");

  require_once("Jpgraph/jpgraph.php");
  require_once ("Jpgraph/jpgraph_bar.php");
  
  $gp=new Graph(800,600);
  $gp->SetScale("textlin");
  
  if(isset($_POST['sub'])){
  	$km=$_POST['sel'];
  	// echo "dd";
  	
  }
  
  $x=array();
  $y=array();
  $r=mysql_query("select * from tb_grade where km='$km'");//echo $row['km']
  
  while($row=mysql_fetch_array($r)){
  	$x[]=$row['xh'];
  	$y[]=$row['cj'];
  }
  		
  $bar=new BarPlot($y);
 
  $gp->xaxis->SetTickLabels($x);
 
  $gp->Add($bar);
  $bar->value->show();
  if($km=="数学"){
 $gp->title->set(iconv("utf-8","gb2312","数学成绩"));
 $gp->title->SetFont(FF_SIMSUN, FS_NORMAL,15);   //设置宋体字
  }else{
  	$gp->title->set(iconv("utf-8","gb2312","语文成绩"));
  	$gp->title->SetFont(FF_SIMSUN, FS_NORMAL,15);   //设置宋体字
  }
  $gp->xaxis->title->set(iconv("utf-8","gb2312","学号"));  //x轴标题内容
  $gp->xaxis->title->setFont(FF_SIMSUN,FS_BOLD,10);
  $gp->yaxis->title->set(iconv("utf-8","gb2312","成绩(百分制)"));     //y轴标题内容
  $gp->yaxis->title->setFont(FF_SIMSUN,FS_BOLD,10);
 $gp->Stroke();
 
 ?>