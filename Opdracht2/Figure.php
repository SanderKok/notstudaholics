<?php
abstract class Figure {
    private $color;

    public function __construct($color) {
        $this->color = $color;
    }

    public function getColor() {
        return $this->color;
    }
}