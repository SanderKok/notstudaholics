<?php
class Triangle extends Figure {
    private $width;
    private $height;

    public function __construct($color, $width, $height) {
        $this->width = $width;
        $this->height = $height;
        parent::__construct($color);
    }

    public function drawTriangle() {
        print '
        <div style="
            width: 0;
            height: 0;
            border-left: '.$this->height.'px solid transparent;
            border-right: '.$this->height.'px solid transparent;
            border-bottom: '.$this->width.'px solid '.$this->getColor().';
        "></div>';
    }
}