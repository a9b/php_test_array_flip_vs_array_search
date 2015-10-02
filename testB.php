<?php
//testB
require_once("Benchmark/Timer.php");
require_once("./sampleData.php");

$timer = new Benchmark_Timer();
$timer->start();
$r = array_search("kFJeaj08OKSMc7jD", $array);
$timer->setMarker('function END');
var_dump($r);
$timer->stop();
$timer->display();