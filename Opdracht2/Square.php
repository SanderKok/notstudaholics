<?php
class Square extends Figure {
    private $size;

    public function __construct($color, $size) {
        $this->size = $size;
        parent::__construct($color);
    }

    public function drawSquare() {
        print '<div style="background-color:'.$this->getColor().';' .'width: '.$this->size.'px; height: '.$this->size.'px">' .'</div>';
    }
}