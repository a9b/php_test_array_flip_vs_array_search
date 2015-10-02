<?php
//testA
require_once("Benchmark/Timer.php");
require_once("./sampleData.php");

$timer = new Benchmark_Timer();
$timer->start();
//$r = array_search("kFJeaj08OKSMc7jD", $array);
//var_dump($array[$r]);
$_flip = array_flip($array);
$timer->setMarker('function END');
var_dump($_flip["kFJeaj08OKSMc7jD"]);
$timer->stop();
$timer->display();