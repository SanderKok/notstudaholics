<?php
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
?>