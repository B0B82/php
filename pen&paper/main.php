<?php
require_once(dirname(__FILE__) . '/paper.php');
require_once(dirname(__FILE__) . '/pen.php');

$paper = new Paper();
$pen = new Pen();

$pen->write($paper, "Hello, world!");
echo $paper;
?>