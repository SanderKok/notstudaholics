<?php

class House
{
    private $width;
    private $height;
    private $depth;
    private $floors;
    private $rooms;
    private $price;

    public function __construct($width, $height, $depth, $floors, $rooms) {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->floors = $floors;
        $this->rooms = $rooms;
    }

    public function calcPrice() {
        $this->price = $this->width * $this->height * $this->depth;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getDepth() {
        return $this->depth;
    }

    public function getFloors() {
        return $this->floors;
    }

    public function getRooms() {
        return $this->rooms;
    }

     public function getPrice() {
        return $this->price;
    }
}