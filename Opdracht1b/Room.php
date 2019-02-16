<?php
class House
{
    private $width;
    private $height;
    private $depth;
    private $floors;
    private $rooms = Array();
    private $pricePerCubic;
    private $priceTotal;

    public function __construct($width, $height, $depth, $floors, $pricePerCubic) {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->floors = $floors;
        $this->pricePerCubic = $pricePerCubic;
    }

    public function addRoom($width, $height, $length) {
        $this->rooms[] = new Room($width, $height, $length);
    }

    public function getPriceRooms() {
        $volumeTotal = 0;
        foreach ($this->rooms as $room) {
            $volumeTotal += $room->getVolume();
        }
        return $volumeTotal *= $this->pricePerCubic;
    }
    
    public function getPriceHouse() {
        return $priceTotal = $this->width * $this->height * $this->depth;
    }

    public function getPriceTotal() {
        return $this->getPriceHouse() + $this->getPriceRooms();
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
        return Count($this->rooms);
    }
}

class Room {
    private $width;
    private $height;
    private $length;
    private $volume;

    public function __construct($width, $height, $length) {
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }

    public function getVolume() {
        return $this->volume = $this->width * $this->height * $this->length;
    }
}