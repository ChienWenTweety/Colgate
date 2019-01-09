<?php

include ("jpgraph/src/jpgraph.php");
include ("jpgraph/src/jpgraph_bar.php");
include ("jpgraph/src/jpgraph_line.php");
include ("jpgraph/src/jpgraph_pie.php");
include ("jpgraph/src/jpgraph_pie3d.php");




function miconv($gnames) {
    if(is_array($gnames)){
        foreach($gnames as $gname){
            $newgname[] = iconv('UTF-8','GB2312',$gname);
        }
    }else{
        $newgname = iconv('UTF-8','GB2312',$gnames);
    }
    return $newgname;
}

//require_once('db_connect.php');


$datay  = array(67.3,33.9);
$datax = array(1,2);

$graph = new Graph(400,500);  //創建新的Graph對象
$graph->SetScale("textlin");  //刻度樣式
$graph->SetShadow();          //設置陰影
$graph->img->SetMargin(80,30,40,50); //設置邊距

$graph->graph_theme = null; //設置主題為null，否則value->Show(); 無效

$barplot = new BarPlot($datay);  //創建BarPlot對象
$barplot->SetFillColor('blue'); //設置顏色
$barplot->value->Show(); //設置顯示數字
$graph->Add($barplot);  //將柱形圖添加到圖像中

$graph->title->Set(iconv("UTF-8","GB2312//IGNORE","Monetary value"));
$graph->xaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","Group")); //設置標題和X-Y軸標題
$graph->yaxis->title->Set(iconv("UTF-8","GB2312//IGNORE","Customer response rate(%)"));
$graph->title->SetColor("red");
$graph->yaxis->title->SetMargin(20);
$graph->xaxis->SetTickLabels(miconv($datax));

$graph->title->SetFont(FF_SIMSUN,FS_BOLD);  //設置字體
$graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->SetFont(FF_SIMSUN,FS_BOLD);

$graph->Stroke(); 

?>