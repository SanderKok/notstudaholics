<?php
class Circle extends Figure {
    private $size;

    public function __construct($color, $size) {
        $this->size = $size;
        parent::__construct($color);
    }

    public function getSize() {
        return $this->size;
    }

    public function drawCircle() {
        print '<div style="background-color:'.$this->getColor().';'.'width: '.$this->getSize().'px; height:'.$this->getSize().'px; border-radius: 50%;">' .'</div>';
    }
}