<?php
class Rectangle extends Figure {
    private $width;
    private $height;

    public function __construct($color, $width, $height) {
        $this->width = $width;
        $this->height = $height;
        //This calls the color from the figure abstract class
        parent::__construct($color);
    }

    //This prints the shape out with the necessary css
    public function drawRectangle() {
        print '<div style="background-color:'.$this->getColor().';' .'width: '.$this->width.'px; height: '.$this->height.'px">' .'</div>';
    }
}