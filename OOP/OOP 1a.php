<?php
class House {
    #creates variables
    private $floors;
	private $rooms;
	private $width;
	private $height;
	private $depth;
	private $price;
    private $answer;
    
    #gets the values
    public function setHouse($floors, $rooms, $width, $height, $depth)
	{
		$this->floors = $floors;
		$this->rooms = $rooms;
		$this->width = $width;
		$this->height = $height;
        $this->depth = $depth;
        $this->answer = $this->width * $this->height * $this->depth;
        $this->price = 15 * $this->answer;
    }
    
    #returns the value of the floors
    public function getFloors()
	{
		return "amount floors = ".$this->floors."<br>";
    }
    
    #returns the value of the rooms
    public function getRooms()
	{
		return "amount rooms = ".$this->rooms."<br>";
    }
    
    #returns the value of the width
    public function getWidth()
	{
		return "The width = ".$this->width."<br>";
    }
    
    #returns the value of the heigth
    public function getHeight()
	{
		return "de height = ".$this->height."<br>";
	}
    
    #returns the value of the depth
    public function getDepth()
	{
		return "de depth = ".$this->depth."<br>";
    }
    
    #calculates and returns the value of 
    public function getAnswer()
    {
        return "kubic meters = ". $this->answer."<br>";
    }

    #returns the value of the price
    public function getPrice()
	{
		return "the price per kubic meter is 15 euro's. Price = €". $this->price."<br><br>";
    }
}

#calls the house class
$house1 = new House();
#values for the house (floors, rooms, width, height, depth)
$house1->setHouse(15, 2, 4, 7, 3);
#prints the functions
print $house1->getRooms();
print $house1->getFloors();
print $house1->getWidth();
print $house1->getHeight();
print $house1->getDepth();
print $house1->getAnswer();
print $house1->getPrice();

#calls the house class
$house2 = new House();
#values for the house (floors, rooms, width, height, depth)
$house2->setHouse(12, 4, 5, 2, 4);
#prints the functions
print $house2->getRooms();
print $house2->getFloors();
print $house2->getWidth();
print $house2->getHeight();
print $house2->getDepth();
print $house2->getPrice();
print $house2->getAnswer();

#calls the house class
$house3 = new House();
#values for the house (floors, rooms, width, height, depth)
$house3->setHouse(2, 1, 9, 4, 7);
#prints the functions
print $house3->getRooms();
print $house3->getFloors();
print $house3->getWidth();
print $house3->getHeight();
print $house3->getDepth();
print $house3->getPrice();
print $house3->getAnswer();
?>