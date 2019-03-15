<?php
#abstract class with values the other classes will need
abstract class Figure {
    #create variable
    private $color;

    #set the value
    public function setColor($color) {
        $this->color = $color;
    }

    #returns the value
    public function getColor() {
        return $this->color;
    }
}

#class that creates an square needs figure to work
class Square extends Figure {
    #create variable
    private $size;

    #sets the values
    public function setSize($size) {
        $this->size = $size;
        parent::getColor();
    }

    #returns the square
    public function getSquare() {
        return '<div style="background-color:'.$this->getColor().';' .'width: '.$this->size.'px; height: '.$this->size.'px">' .'</div>';
    }
}

#class to create rectangles needs figure to work
class Rectangle extends Figure {
    #create variables
    private $height;
    private $width;

    #sets the values
    public function setSize($height, $width) {
        $this->height = $height;
        $this->width = $width;
        parent::getColor();
    }

    #returns the rectangle
    public function getRectangle() {
        return '<div style="background-color:'.$this->getColor().';' .'width: '.$this->width.'px; height: '.$this->height.'px">' .'</div>';
    }
}

#class to create triangles needs figure to work
class Triangle extends Figure {
    #create variables
    private $height;
    private $width;

    #sets values
    public function setSize($height, $width) {
        $this->height = $height;
        $this->width = $width;
        parent::getColor();
    }

    #returns the triangle
    public function getTriangle() {
        return '<div style="width: 0; border-left: '.$this->height.'px solid transparent; border-right: '.$this->height.
        'px solid transparent; border-bottom: '.$this->width.'px solid '.$this->getColor().';"></div>';
    }
}

#class to create a circle needs figure to work
class Circle extends Figure {
    #creates variables
    private $size;

    #sets values
    public function setSize($size) {
        $this->size = $size;
        parent::getColor();
    }

    #returns the circle
    public function getCircle() {
        print '<div style="background-color:'.$this->getColor().';'.'width: '.$this->size.'px; height:'.$this->size.'px; border-radius: 50%;">' .'</div>';
    }
}

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