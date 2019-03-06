<?php
    class House
    {
        private $price;
        private $room = [];

        public function setPrice()
        {
            $this->price = $price;
        }

        public function addRoom($room)
        {
            $this->room[] = $room;
        }

        public function getVolumeHouse()
        {
            print_r ($this->$room);
        }
    }

    class Room
    {
        private $width;
        private $height;
        private $depth;
        private $room;

        public function setRoom($width, $height, $depth)
        {
            $this->width = $width;
            $this->height = $height;
            $this->depth = $depth;
        }

        public function getVolumeRoom()
        {
            $box = $this->width * $this->length * $this->depth;
            return $box;
        }
    }
$house1 = new House();
$house1->setPrice(15);

$room1 = new Room();
$room1->setRoom(5,5,5);
$room1->getVolumeRoom();
$house->addRoom($room);

print $room->getVolumeRoom();