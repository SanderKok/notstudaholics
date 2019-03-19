<?php
#class that creates the staff needs person to work
abstract class Staff extends Person {
    #sets the staff variable to yes
    public function setStaff() {
        $this->staff = "yes";
    }
    #returns the value
    public function getStaff() {
        return $this->staff;
    }
}
?>