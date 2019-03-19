<?php
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
?>