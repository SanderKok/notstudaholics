<?php
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
?>