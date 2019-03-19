<?php
#class that creates an square needs figure to work
class Square extends Figure {
    #create variable
    private $size;

    #sets the values
    public function setSize($size) {
        $this->size = $size;
        parent::getColor();
    }

    #returns the square
    public function getSquare() {
        return '<div style="background-color:'.$this->getColor().';' .'width: '.$this->size.'px; height: '.$this->size.'px">' .'</div>';
    }
}
?>