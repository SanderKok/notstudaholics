<?php
class Triangle extends Figure {
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

    public function drawTriangle() {
        print '
        <div style="
            width: 0;
            height: 0;
            border-left: '.$this->getHeight().'px solid transparent;
            border-right: '.$this->getHeight().'px solid transparent;
            border-bottom: '.$this->getWidth().'px solid '.$this->getColor().';
        "></div>';
    }
}