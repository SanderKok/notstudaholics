<?php
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
?>