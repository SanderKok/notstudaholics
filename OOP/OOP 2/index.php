<?php
include "figure.php";
include "square.php";
include "rectangle.php";
include "triangle.php";
include "cirkle.php";

#calls the square class
$square = new Square();
#the color of the square
$square->setColor("red");
#the size of the square
$square->setSize(150);
#prints the square
echo $square->getSquare();

#calls the rectangle class
$rectangle = new Rectangle();
#the color of the rectangle
$rectangle->setColor("green");
#the dimensions for the rectangle
$rectangle->setSize(150, 300);
#prints the rectangle
echo $rectangle->getRectangle();

#calls the triangle class
$triangle = new Triangle();
#the color of the triangle
$triangle->setColor("purple");
#dimensions for the triangle
$triangle->setSize(150, 150);
#prints the triangle
echo $triangle->getTriangle();

#calls the circle class
$square = new Circle();
#the color of the circle
$square->setColor("orange");
#the size of the circle
$square->setSize(150);
#prints the circle
echo $square->getCircle();
?>