<?php
include 'Circle.php';
include "Comparable.php";
include 'ComparableCircle.php';
$circleOne = new ComparableCircle('Circle One',10);
$circleTwo = new ComparableCircle('Circle Two',2);
var_dump($circleOne->compareTo($circleTwo));