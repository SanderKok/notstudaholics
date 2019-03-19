<?php
#class that creates all the game information
class Game extends Product {
    #creates variables
    public $hardware;
    public $minimal;
    public $genre;

    #sets a value with the minimal hardware
    public function setHardware($hardware, $minimal) {
        $this->desc = $hardware.": ".$minimal;
    }

    #sets the genre
    public function setGenre($genre) {
        $this->desc = "Genre: ".$genre."<br>";
    }

    #returns the values to the array in the product class
    public function getGame() {
        return $this->desc;
    }
}
?>