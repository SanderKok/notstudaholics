<?php
include "product.php";
include "music.php";
include "movie.php";
include "game.php";

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