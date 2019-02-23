<?php
require('Figure.php');
include('Square.php');
include('Rectangle.php');
include('Circle.php');
include('Triangle.php');

$rectangle = new Rectangle('Orange', 150, 50);
$square = new Square('Red', 150);
$circle = new Circle('Blue', 100);
$triangle = new Triangle('Green', 200, 150);

require('index.view.php');