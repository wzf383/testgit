<?php // content="text/plain; charset=utf-8"
header("content-type:text/html;charset=utf-8");
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');

$datay=array(80,78,50,66,45	);
//$datay2=array(40,60,223,690);
$datay2=array(40,60,70,50,30);
$datazero=array(0,0,0,0);

// Create the graph. 
$graph = new Graph(800,600);
$graph->title->set(iconv("utf-8","gb2312","水果一月，二月份销售量"));
$graph->title->SetFont(FF_SIMSUN, FS_BOLD,15);
// Setup Y and Y2 scales with some "grace"	
$graph->SetScale("textlin",0,80);
$graph->yaxis->scale->ticks->set(10);

//$graph->SetY2Scale("lin");
$graph->yaxis->scale->SetGrace(30);
//$graph->y2axis->scale->SetGrace(30);

$graph->ygrid->Show(true,true);
$graph->ygrid->SetColor('gray','lightgray@0.5');

// Setup graph colors
$graph->SetMarginColor('white');
//$graph->y2axis->SetColor('darkred');


// Create the "dummy" 0 bplot
$bplotzero = new BarPlot($datazero);

// Create the "Y" axis group
$ybplot1 = new BarPlot($datay);
$ybplot1->value->Show();
$ybplot = new GroupBarPlot(array($ybplot1,$bplotzero));

// Create the "Y2" axis group
$ybplot2 = new BarPlot($datay2);
$ybplot2->value->Show();
$ybplot2->value->SetColor('darkred');
$ybplot2->SetFillColor('darkred');
$y2bplot = new GroupBarPlot(array($bplotzero,$ybplot2));

// Add the grouped bar plots to the graph
$graph->Add($ybplot);
$graph->AddY2($y2bplot);

// .. and finally stroke the image back to browser
$graph->Stroke();
?>