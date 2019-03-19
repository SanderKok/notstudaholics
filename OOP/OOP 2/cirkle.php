<?php
#class to create a circle needs figure to work
class Circle extends Figure {
    #creates variables
    private $size;

    #sets values
    public function setSize($size) {
        $this->size = $size;
        parent::getColor();
    }

    #returns the circle
    public function getCircle() {
        print '<div style="background-color:'.$this->getColor().';'.'width: '.$this->size.'px; height:'.$this->size.'px; border-radius: 50%;">' .'</div>';
    }
}
?>