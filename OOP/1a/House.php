<?php
class House 
{
  private $number;
  private $floors;
  private $rooms;
  private $width;
  private $height;
  private $depth;
  private $price;

  public function __construct($number, $floors, $rooms, $width, $height, $depth, $price)
  {
    $this->number = $number;
    $this->floors = $floors;
    $this->rooms = $rooms;
    $this->width = $width;
    $this->height = $height;
    $this->depth = $depth;
    $this->price = $price;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function setFloors($floors)
  {
    $this->floors = $floors;
  }

  public function setRooms($rooms)
  {
    $this->rooms = $rooms;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function setDepth($depth)
  {
    $this->depth = $depth;
  }

  public function setPrice($price)
  {
    $this->price = $this->width * $this->height * $this->depth + $price;
  }

  public function getAll()
  {
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
$house1 = new House(1, 3, 12, 10, 20, 15, 20);
$house1->getAll();
print_r($house1);

// House 2
$house2 = new House(2, 4, 12, 10, 24, 20, 40);
$house2->getAll();
print_r($house2);

// House 3
$house3 = new House(3, 3, 12, 12, 20, 15, 20);
$house3->getAll();
print_r($house3);
