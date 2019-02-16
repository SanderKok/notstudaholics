<?php
class House {
  private $number;
  private $floors;
  private $rooms;
  private $width;
  private $height;
  private $depth;
  private $price;

  public function __contruct($number, $floors, $rooms, $width, $height, $depth, $price) {
    $this->number = $number;
    $this->floors = $floors;
    $this->rooms = $rooms;
    $this->width = $width;
    $this->height = $height;
    $this->depth = $depth;
    $this->price = $price;
  }

  public function setNumber($number) {
    $this->number = $number;
  }

  public function setFloors($floors) {
    $this->floors = $floors;
  }

  public function setRooms($rooms) {
    $this->rooms = $rooms;
  }

  public function setWidth($width) {
    $this->width = $width;
  }

  public function setHeight($height) {
    $this->height = $height;
  }

  public function setDepth($depth) {
    $this->depth = $depth;
  }

  public function setPrice($price) {
    $this->price = $this->width * $this->height * $this->depth + $price;
  }

  public function getAll() {
    return [
      $this->number,
      $this->floors,
      $this->rooms,
      $this->width,
      $this->height,
      $this->depth,
      $this->price
    ];
  }
}

// House 1
$house1 = new House();
$house1->setNumber(1);
$house1->setFloors(3);
$house1->setRooms(12);
$house1->setWidth(10);
$house1->setHeight(20);
$house1->setDepth(15);
$house1->setPrice(20);
$house1->getAll();
print_r($house1);

// House 2
$house2 = new House();
$house2->setNumber(2);
$house2->setFloors(4);
$house2->setRooms(12);
$house2->setWidth(10);
$house2->setHeight(24);
$house2->setDepth(20);
$house2->setPrice(40);
$house2->getAll();
print_r($house2);

// House 3
$house3 = new House();
$house3->setNumber(3);
$house3->setFloors(3);
$house3->setRooms(12);
$house3->setWidth(10);
$house3->setHeight(20);
$house3->setDepth(15);
$house3->setPrice(20);
$house3->getAll();
print_r($house3);
