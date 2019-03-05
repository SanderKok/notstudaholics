<?php
abstract class Product {
    private $name;
    private $purchaseprice;
    private $category;
    private $btw;
    private $description = [];
    private $profit;

    public function setProduct($name, $purchaseprice, $category, $btw, $profit) {
        $this->name = $name;
        $this->purchaseprice = $purchaseprice;
        $this->category = $category;
        $this->btw = $btw;
        $this->profit = $profit;
    }

    public function addDescription() {
        $this->description[] = $this->desc;
    }

    public function getProduct() {
        print "<h1>".$this->category.": ".$this->name."</h1>";
        foreach ($this->description as $song) {
            print "    ".$song."<br>";
        }
        return "<h2>Price: $".($this->purchaseprice + ($this->purchaseprice / 100 * $this->btw) + $this->profit)."</h2>";
    }
}
class Music extends Product {
    public $song;

    public function setSong($song) {
        $this->desc = $song;
    }

    public function getSong() {
        return $this->desc;
    }
}
class Movie extends Product {
    public $resolution;

    public function setFilm($resolution) {
        $this->desc = $resolution;
    }

    public function getFilm() {
        return $this->desc;
    }
}
class Game extends Product {
    public $hardware;
    public $minimal;
    public $genre;

    public function setHardware($hardware, $minimal) {
        $this->desc = $hardware.": ".$minimal;
    }

    public function setGenre($genre) {
        $this->desc = "Genre: ".$genre."<br>";
    }

    public function getGame() {
        return $this->desc;
    }
}
$album = new Music();
$album->setProduct("Salt For Salt", 10, "Music",21,1);
$album->setSong("Fingers to the Bone");
$album->getSong();
$album->addDescription();
$album->setSong("Chairkickers");
$album->getSong();
$album->addDescription();
$album->setSong("Bildgewater");
$album->getSong();
$album->addDescription();
$album->setSong("End Of Days");
$album->getSong();
$album->addDescription();
$album->setSong("Blood Of Angels");
$album->getSong();
$album->addDescription();
$album->setSong("Shiloh");
$album->getSong();
$album->addDescription();
$album->setSong("Ebb & Flow");
$album->getSong();
$album->addDescription();
$album->setSong("Come My Way");
$album->getSong();
$album->addDescription();
$album->setSong("Thunder & Lightning");
$album->getSong();
$album->addDescription();
$album->setSong("Nothing Left");
$album->getSong();
$album->addDescription();
$album->setSong("Cast no Shadow");
$album->getSong();
$album->addDescription();
echo $album->getProduct();

$movie = new Movie();
$movie->setProduct("Insidius", 13, "Movie",21,1);
$movie->setFilm("1920x1080");
$movie->getFilm();
$movie->addDescription();
echo $movie->getProduct();

$game = new Game();
$game->setProduct("Halo Reach", 9, "Game",21,1);
$game->setGenre("FPS");
$game->getGame();
$game->addDescription();
$game->setHardware("CPU","2 GHz");
$game->getGame();
$game->addDescription();
$game->setHardware("RAM","2 GB");
$game->getGame();
$game->addDescription();
echo $game->getProduct();
?>