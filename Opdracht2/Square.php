<?php
class Square extends Figure {
    private $size;

    public function __construct($color, $size) {
        $this->size = $size;
        parent::__construct($color);
    }

    public function getSize() {
        return $this->size;
    }

    public function drawSquare() {
        print '<div style="background-color:'.$this->getColor().';' .'width: '.$this->getSize().'px; height: '.$this->getSize().'px">' .'</div>';
    }
}