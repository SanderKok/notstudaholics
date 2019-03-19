<?php
#abstract class with values the other classes will need
abstract class Figure {
    #create variable
    private $color;

    #set the value
    public function setColor($color) {
        $this->color = $color;
    }

    #returns the value
    public function getColor() {
        return $this->color;
    }
}
?>