<?php
#abstract class with values that matter to the child classes
abstract class Product {
    #creates variables
    private $name;
    private $purchaseprice;
    private $category;
    private $btw;
    private $description = [];
    private $profit;

    #sets the values
    public function setProduct($name, $purchaseprice, $category, $btw, $profit) {
        $this->name = $name;
        $this->purchaseprice = $purchaseprice;
        $this->category = $category;
        $this->btw = $btw;
        $this->profit = $profit;
    }

    #creates an array of all the items creates in the child classes
    public function addDescription() {
        $this->description[] = $this->desc;
    }

    #print all the product info
    public function getProduct() {
        print "<h1>".$this->category.": ".$this->name."</h1>";
        foreach ($this->description as $song) {
            print "    ".$song."<br>";
        }
        return "<h2>Price: $".($this->purchaseprice + ($this->purchaseprice / 100 * $this->btw) + $this->profit)."</h2>";
    }
}
#class that creates an music album needs product to work
class Music extends Product {
    #create variable
    public $song;

    #sets the value 
    public function setSong($song) {
        $this->desc = $song;
    }

    #returns the value to be put inside the array in the product class
    public function getSong() {
        return $this->desc;
    }
}
#class that creates the movie information needs product to work
class Movie extends Product {
    #creates variable
    public $resolution;

    #sets value
    public function setFilm($resolution) {
        $this->desc = $resolution;
    }

    #returns the value to the array within the product class
    public function getFilm() {
        return $this->desc;
    }
}
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
#calls the music class
$album = new Music();
#sets the standard values of the product
$album->setProduct("Salt For Salt", 10, "Music",21,1);
#creates new song for in the array
$album->setSong("Fingers to the Bone");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Chairkickers");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Bildgewater");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("End Of Days");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Blood Of Angels");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Shiloh");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Ebb & Flow");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Come My Way");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Thunder & Lightning");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Nothing Left");
$album->getSong();
$album->addDescription();
#creates new song for in the array
$album->setSong("Cast no Shadow");
$album->getSong();
$album->addDescription();
#prints the product information
echo $album->getProduct();

#calls the movie class
$movie = new Movie();
#sets the standard product information
$movie->setProduct("Insidius", 13, "Movie",21,1);
#sets the resolution
$movie->setFilm("1920x1080");
$movie->getFilm();
$movie->addDescription();
#prints the product information
echo $movie->getProduct();

#calls the game class
$game = new Game();
#sets the standard product information
$game->setProduct("Halo Reach", 9, "Game",21,1);
#sets the genre
$game->setGenre("FPS");
$game->getGame();
$game->addDescription();
#sets minimal hardware
$game->setHardware("CPU","2 GHz");
$game->getGame();
$game->addDescription();
#sets minimal hardware
$game->setHardware("RAM","2 GB");
$game->getGame();
$game->addDescription();
#prints product information
echo $game->getProduct();
?>