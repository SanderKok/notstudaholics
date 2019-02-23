<?php
class Rectangle extends Figure {
    private $width;
    private $height;

    public function __construct($color, $width, $height) {
        $this->width = $width;
        $this->height = $height;
        parent::__construct($color);
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function makeRectangle() {
        print '<div style="background-color:'.$this->getColor().';' .'width: '.$this->getWidth().'px; height: '.$this->getHeight().'px">' .'</div>';
    }
}