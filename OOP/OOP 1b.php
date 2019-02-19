<?php
class House {
    #creates variables
    private $price;
    private $room = [];
    private $volume;

    #sets the values
    public function setPrice($price) {
        $this->price = $price;
    }

    #adds the rooms to an array
    public function addRoom($room) {
        $this->room[] = $room;
    }

    #adds all the volumes of the rooms to each other
    public function setVolumeHouse(){
        $totalVolume = 0;
        foreach ($this->room as $meme) {
            $totalVolume += $meme->getVolumeRoom();
        }
        $this->volume = $totalVolume;
    }

    #returns the totalvolume * price
    public function getPrice(){
        return "The price of the house is ".$this->volume * $this->price;
    }
}
class Room {
    #creates variables
    private $width;
    private $height;
    private $depth;

    #sets the values
    public function setRoom($width, $height, $depth) {
		$this->width = $width;
		$this->height = $height;
        $this->depth = $depth;
    }

    #calculates the volume of the room
    public function getVolumeRoom() {
        return $this->width * $this->height * $this->depth;
    }
}

#calls the house class
$house = new House();
#calls the setPrice function with the value 15
$house->setPrice(15);

#calls the room class
$room = new Room();
#creates a room
$room->setRoom(5,5,5);
$room->getVolumeRoom();
#adds the rom to the array
$house->addRoom($room);

#calls the room class
$room = new Room();
#creates a room
$room->setRoom(4,5,6);
$room->getVolumeRoom();
#adds the rom to the array
$house->addRoom($room);

#calls the room class
$room = new Room();
#creates a room
$room->setRoom(10,9,10);
$room->getVolumeRoom();
#adds the rom to the array
$house->addRoom($room);

#calculates total volume of the house
print $house->setVolumeHouse();
#prints the price of the house
print $house->getPrice();
?>