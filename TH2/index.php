<?php
include "CircleComparator.php";
include "Circle.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
$comparable = $circleComparator->comparable($circleOne, $circleTwo);

var_dump($comparable);
