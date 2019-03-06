<?php 

class House 
{
	
	private $floors;
	private $rooms;
	private $width;
	private $height;
	private $depth;
	private $price;
	private $answer;
	
	public function setHouse($floors, $rooms, $width, $height, $depth, $price, $answer)
	{
		$this->floors = $floors;
		$this->rooms = $rooms;
		$this->width = $width;
		$this->height = $height;
		$this->depth = $depth;
		$this->price = $price;
		$this->answer = $answer;
	}
	
	public function setFloors($floors)
	{
		$this->floors = $floors;		
	}
	
	public function getFloors()
	{
		return "aantal verdiepingen = ".$this->floors."<br>";
	}
	
	// SPACER //
	
	public function setRooms($rooms)
	{
		$this->rooms = $rooms;
	}
	
	public function getRooms()
	{
		return "aantal kamers = ".$this->rooms."<br>";
	}
	
	// SPACER //
	
	public function setWidth($width)
	{
		$this->width = $width;
	}
	
	public function getWidth()
	{
		return "de breedte is = ".$this->width."<br>";
	}
	
	public function setHeight($height)
	{
		$this->height = $height;
	}
	
	public function getHeight()
	{
		return "de hoogte is = ".$this->height."<br>";
	}
	
	public function setDepth($depth)
	{
		$this->depth = $depth;
	}
	
	public function getDepth()
	{
		return "de diepte is = ".$this->depth."<br>";
	}
	
	public function setPrice($price)
	{
		$this->price = $price;
	}
	
	public function getPrice()
	{
		return "de prijs is per kubieke meter is 20. Prijs = €". 10 * ($this->width * $this->height * $this->depth)."<br>";
	}
	
	public function setAnswer($answer)
	{
		$this->answer = $answer;
	}
	
	public function getAnswer()
	{
		return "het aantal kubieke meter = ". $this->width * $this->height * $this->depth."<br><br>";
	}
}

	$house1 = new House();
	$house1->setRooms(15);
	$house1->setFloors(2);
	$house1->setWidth(4);
	$house1->setHeight(7);
	$house1->setDepth(3);
	print $house1->getRooms();
	print $house1->getFloors();
	print $house1->getWidth();
	print $house1->getHeight();
	print $house1->getDepth();
	print $house1->getPrice();
	print $house1->getAnswer();

	$house2 = new House();
	$house2->setRooms(12);
	$house2->setFloors(4);
	$house2->setWidth(5);
	$house2->setHeight(2);
	$house2->setDepth(4);
	print $house2->getRooms();
	print $house2->getFloors();
	print $house2->getWidth();
	print $house2->getHeight();
	print $house2->getDepth();
	print $house2->getPrice();
	print $house2->getAnswer();
	
	$house3 = new House();
	$house3->setRooms(2);
	$house3->setFloors(1);
	$house3->setWidth(9);
	$house3->setHeight(4);
	$house3->setDepth(7);
	print $house3->getRooms();
	print $house3->getFloors();
	print $house3->getWidth();
	print $house3->getHeight();
	print $house3->getDepth();
	print $house3->getPrice();
	print $house3->getAnswer();


?>