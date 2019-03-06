<?php
abstract class Figure {
    private $color;
    //Makes the variable color and makes sure you can get it
    public function setColor($color) {
        $this->color = $color;
    }
    public function getColor() {
        return $this->color;
    }
}
class Square extends Figure {
    private $size;
    //Makes the variable Size and you make a reference to get the color from the main Class Figure
    public function setSize($size) {
        $this->size = $size;
        parent::getColor();
    }
    //Here you make a div container and makes you "Draw" it by giving the values of the width and height
    public function getSquare() {
        return '<div style="background-color:'.$this->getColor().';' .'width: '.$this->size.'px; height: '.$this->size.'px">' .'</div>';
    }
}
class Rectangle extends Figure {
    private $height;
    private $width;

    public function setSize($height, $width) {
        $this->height = $height;
        $this->width = $width;
        parent::getColor();
    }
    public function getRectangle() {
        return '<div style="background-color:'.$this->getColor().';' .'width: '.$this->width.'px; height: '.$this->height.'px">' .'</div>';
    }
}

class Circle extends Figure {
    private $size;
    public function setSize($size) {
        $this->size = $size;
        parent::getColor();
    }
    public function getCircle() {
        print '<div style="background-color:'.$this->getColor().';'.'width: '.$this->size.'px; height:'.$this->size.'px; border-radius: 50%;">' .'</div>';
    }
}

class Triangle extends Figure {
    private $height;
    private $width;
    public function setSize($height, $width) {
        $this->height = $height;
        $this->width = $width;
        parent::getColor();
    }
    public function getTriangle() {
        return '<div style="width: 0; border-left: '.$this->height.'px solid transparent; border-right: '.$this->height.
            'px solid transparent; border-bottom: '.$this->width.'px solid '.$this->getColor().';"></div>';
    }
}


//Here we will give the values to the Size and color so we can display the shapes on our screen
$square = new Square();
$square->setColor("red");
$square->setSize(150);
echo $square->getSquare();

$rectangle = new Rectangle();
$rectangle->setColor("green");
$rectangle->setSize(150, 300);
echo $rectangle->getRectangle();

$circle = new Circle();
$circle->setColor("orange");
$circle->setSize(150);
echo $circle->getCircle();

$triangle = new Triangle();
$triangle->setColor("purple");
$triangle->setSize(150, 150);
echo $triangle->getTriangle();
?>