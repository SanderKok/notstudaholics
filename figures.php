<?php
abstract class Figure
{
    private $color;
    public function __construct($color)
    {
        $this->color = $color;
    }
    
    public function getColor() {
        return $this->color;
    }

}

class Square extends Figure
{
    private $length;
    public function __construct($color, $length)
    {
        $this->length = $length;
        parent::__construct($color);
    }
    public function getLength() {
        return $this->length;
    }

    public function drawSquare()
    {
        print '<div style="
                    background-color: '.$this->getColor().' ;' .'width: '.$this->length.'px; height: '.$this->length.'px">' .'</div>
        ';
    }
}

class Triangle extends Figure
{
    private $length;
    private $width;
    
    public function __construct($color, $length, $width)
    {
        $this->length = $length;
        $this->width = $width;
        parent::__construct($color);
    }

    public function getWidth() {
        return $this->width;
    }
    public function getLength() {
        return $this->length;
    }
    
    public function drawTriangle() {
        print '<div style="width: 0; length: 0; border-left: '.$this->length.'px solid transparent; border-right: '.$this->length.'px solid transparent; border-bottom: '.$this->width.'px solid '.$this->getColor().';"></div>
        ';
    }
}

class Rectangle extends Figure
{
    private $length;
    private $width;
    public function __construct($color, $length, $width)
    {
        $this->length = $length;
        $this->width = $width;
        parent::__construct($color);
    }

    public function drawRectangle()
    {
        print '<div style="background-color:'.$this->getColor().';' .'width: '.$this->width.'px; height:'.$this->length.'px">' .'</div>
        ';
    }
}

class Circle extends Figure
{
    private $radius;
    public function __construct($color,$radius)
    {
        $this->radius = $radius;
        parent::__construct($color);
    }

    public function drawCircle() {
        print '<div style="background-color:'.$this->getColor().';'.'width: '.$this->radius.'px; height:'.$this->radius.'px; border-radius: 50%;">' .'</div>
        ';
    }    

}

$square = new Square('red',150);
echo $square->drawSquare();

$driehoek = new Triangle('green',130,110);
echo $driehoek->drawTriangle();

$rechthoek = new Rectangle('pink',150,50);
echo $rechthoek->drawRectangle();

$cirkel = new Circle('yellow', 250);
echo $cirkel->drawCircle();










